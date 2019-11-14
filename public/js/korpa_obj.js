const formatiranje = new Intl.NumberFormat('sr-SR', {
  minimumFractionDigits: 2
});

const korpa = {

  // niz čuva korpu
  niz: [],

  dodaj: function(user_id, id, naziv, cena, slika){
    if(this.niz.length === 0) {
      this.niz.push({ user_id: user_id, id: id, naziv: naziv, slika: slika, kolicina: 1, cena: cena});
    } else {
      let postoji = false, tmpId;
      for (let i = 0; i < this.niz.length; i++){
        if (this.niz[i].id === id) {
          postoji = true; 
          tmpId = i;
        }
      }
      (postoji) ? this.niz[tmpId].kolicina++ : this.niz.push({ user_id: user_id, id: id, naziv: naziv, slika: slika, kolicina: 1, cena: cena});
    }
    this.snimi_u_session();
    // console.log(this.niz);
  },
  
  ukupna_vr: function() {
    
    return this.niz.map(proizvod =>  ({user_id: proizvod.user_id, id: proizvod.id, naziv: proizvod.naziv, slika: proizvod.slika, kolicina: proizvod.kolicina, cena: proizvod.cena, ukupnaVrednost: proizvod.kolicina*proizvod.cena }));
  },
  
  obrisi: function(id)  {
    for (let i = 0; i < this.niz.length; i++){
      if (this.niz[i].id === id) {
        this.niz.splice(this.niz.indexOf(this.niz[i]), 1);
      }
    }
    this.snimi_u_session();
  }, 
  
  snimi_u_session: function() { 
    sessionStorage.setItem('korpa', JSON.stringify(this.niz));
  },

  ucitaj_iz_session: function(){ 
    this.niz = sessionStorage.getItem('korpa') === null ? [] : JSON.parse(sessionStorage.getItem('korpa'));
  },

  prikaziKorpu: function(){
    this.ucitaj_iz_session();

    let nizKorpa = [];

    this.ukupna_vr().map((clan) => {
      for (let clanKorpe of this.ukupna_vr()){
        if (clan.id === clanKorpe.id){
          nizKorpa.push({ user_id: clan.user_id, id: clan.id, ime: clan.naziv, slika: clan.slika, kolicina: clan.kolicina, vrednost: clanKorpe.ukupnaVrednost });
        }
      }
    });

    // console.log( "fali dodati user_id", nizKorpa);
    return nizKorpa;
  },

  ukupanIznos: function(){
    let tmp = this.prikaziKorpu().map(vr => vr.vrednost);
    return tmp.reduce((acc, clan) => acc += clan, 0);
  },

  napraviTabelu: function(){

    const div = document.querySelector('#proizvodi');

    const tabelaKorpa = document.createElement('table');
    tabelaKorpa.className = "tabela tablea-korpa";

    const tr = document.createElement('tr');

    const thIme = document.createElement('th');
    thIme.textContent = "Naziv proizvoda";
    
    const thSlika = document.createElement('th');
    thSlika.textContent = "Slika";
    
    const thKolicina = document.createElement('th');
    thKolicina.className = "kolicina-centar";
    thKolicina.textContent = "Količina";
    
    const thUkVrednost = document.createElement('th');
    thUkVrednost.textContent = "Vrednost";
    
    const thBrisanje = document.createElement('th');
    thBrisanje.textContent = "Brisanje";

    tr.append(thIme, thSlika, thKolicina, thUkVrednost, thBrisanje);
    tabelaKorpa.append(tr);
    
    for (let clan of this.prikaziKorpu()){
      // console.log(clan)
      const tr = document.createElement('tr');

      const tdIme = document.createElement('td');
      tdIme.className = "ime-korpa";
      tdIme.textContent = clan.ime;

      const tdSlika = document.createElement('td');
      tdSlika.innerHTML = `<img src="images/${clan.slika}" alt="${clan.ime}" class="slika-korpa">`;

      const tdKolicina = document.createElement('td');
      tdKolicina.className = "kolicina-centar";
      tdKolicina.textContent = clan.kolicina;

      const tdVrednost = document.createElement('td');
      tdVrednost.innerHTML = `${formatiranje.format(clan.vrednost)} din`;
      
      const tdtdObrisi = document.createElement('td');
      const btnObrisi = document.createElement('button');
      btnObrisi.className = "btnObrisi";
      btnObrisi.textContent = "Obriši";
      btnObrisi.addEventListener('click', () => {
        tr.remove();
        this.obrisi(clan.id);
        poruke.poruka('Proizvod je uklonjen iz korpe!', 'crveno');
        document.querySelector('#korpaTotal').innerHTML = `Ukupan iznos: ${formatiranje.format(korpa.ukupanIznos())} dinara`;
      });
      tdtdObrisi.append(btnObrisi);


      tr.append(tdIme, tdSlika, tdKolicina, tdVrednost, tdtdObrisi);
      tabelaKorpa.append(tr);
    }

    const trTotal = document.createElement('tr');
    const tdTotal = document.createElement('td');
    tdTotal.innerHTML= `Ukupan iznos: ${formatiranje.format(this.ukupanIznos())} dinara`;
    tdTotal.id = 'korpaTotal';
    tdTotal.colSpan = 5;
    tdTotal.style = 'text-align: right; font-weight:700; font-size: 18px;';
    trTotal.append(tdTotal);
    tabelaKorpa.append(trTotal);
    
    const btnNaruci = document.createElement('button');
    btnNaruci.className = "btnNaruci";
    btnNaruci.textContent = "Naruči";
    btnNaruci.addEventListener('click', () => {
      if(user_id === -1){
        // alert("Morate biti ulogovani da bi ste poslali narudžbinu!");
        poruke.poruka("Morate biti ulogovani da bi ste poslali narudžbinu!", "crveno");
        return;
      }
      // (this.prikaziKorpu().length !== 0) ? 
      //   poruke.poruka('Narudžbina je uspošno prosleđena! Hvala!', 'zeleno')
      // : poruke.poruka('Korpa je prazna!', 'crveno');

      // šalje podatke laravelu
      // podaci o ulogovanom korisniku
      let kupovina = JSON.parse(sessionStorage.getItem('korpa'));
      let napomena = document.querySelector('#napomena').value;
      let gaziste = document.querySelector("#gaziste").value;
      
      axios({
            method: 'post',  
            url: 'http://127.0.0.1:8000//posalji-user',
            data: {
              user_id: user_id,
              napomena_user: napomena,
              ukup_suma: this.ukupanIznos()
              
            }
        })
          .then(resp=> {
            let fakture_id = resp.data;
            
            // console.log(resp.data);
            // za stavke
            kupovina.forEach((stavka, ind) => {
              axios({
                method: 'post',  
                url: 'http://127.0.0.1:8000//posalji-stavke',
                data: {
                  fakture_id: fakture_id,
                  proizvod_id: stavka.id,
                  cena: stavka.cena,
                  kolicina: stavka.kolicina,
                  gaziste: gaziste
                }
            })
              // .then(resp=> resp.data)
              .then(resp=> {
                // console.log(resp.data.success);
                poruke.poruka(resp.data.msg, resp.data.boja);
                sessionStorage.removeItem('korpa');
                document.querySelector('#proizvodi').innerHTML = '';
                document.querySelector('#napomena').value = '';
                this.napraviTabelu();
              })
              .catch(err => {
                console.error(err.message);
                poruke.poruka('Došlo je do greške prilikom slanja narudžbenice, pokušajte ponovo kasnije!', 'crveno');
                return;
              })
            });
          })
          .catch(err => {
            poruke.poruka('Došlo je do greške!', 'crveno');
            console.log(err);
          })
    });


    div.append(tabelaKorpa, btnNaruci);
  }
}

korpa.ukupanIznos();
// console.log(korpa.ukupna_vr());