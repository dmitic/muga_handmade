korpa.ucitaj_iz_session();
const proizvod = {
    nadji_ID() {
        let loc = window.location.href;
        let a1 = loc.split("/");
        return a1[a1.length-1];
    },

    odabranProizvod(proizvod) {
        const div = document.createElement("div");
        div.className = "proizvod-detaljnije row col-md-12";

        // za carousel
        let carousel = `<div class="col-md-6"><div class="d-flex justify-content-center">
        <div id="carouselSlike" class="carousel slide carousel-fade carSlide" data-ride="carousel">
            <div class="carousel-inner carInner">`;

            proizvod.slike = proizvod.slike.length !== 0 ? proizvod.slike : [{slika: 'no-image.png'}];

            proizvod.slike.forEach((slika, ind)=>{
                carousel += ind === 0 ? `<div class="carousel-item active">` : `<div class="carousel-item">`;
                carousel +=`<img src='/images/${slika.slika}' class="d-block w-100 img-responsive carimg";" alt="${proizvod.naziv}">
                </div>`;
            });

            carousel += `</div>
                <a class="carousel-control-prev" href="#carouselSlike" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselSlike" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>`;

        div.innerHTML = carousel;

        const divDesni = document.createElement("div");
        divDesni.className = "col-md-6";

        const tabela = document.createElement("table");
        tabela.className = "tabela";

        for (let naziv in proizvod) {
            if (naziv !== 'id' && naziv !== 'created_at' && naziv !== 'updated_at' && naziv !== 'slike' && naziv !== 'napomena'){
              const tr = document.createElement('tr');
              const tdKey = document.createElement('td');
              const tdValue = document.createElement('td');

              tdKey.textContent = `${naziv.replace('_', ' ')}:`;
              tdKey.className = "tdKey";
              
              (naziv === 'opis') ? 
                        tdValue.innerHTML = `<strong>${(proizvod[naziv] === null) ?
                                'Trenutno nema opisa' : proizvod[naziv]}</strong>` : 
                                (naziv === 'cena') ? 
                                            tdValue.innerHTML = `<strong>${formatiranje.format(Number(proizvod[naziv]))} RSD</strong>` 
                                            : tdValue.innerHTML = `<strong>${proizvod[naziv]}</strong>`;
              tr.append(tdKey);
              tr.append(tdValue)
              tabela.append(tr);
            }
        }
        divDesni.append(tabela);

        const kupi = document.createElement("button");
        kupi.className = "btnKupi";
        kupi.textContent = "Dodaj u korpu";
        kupi.addEventListener("click", () => {
          if(user_id === -1){
            poruke.poruka("Morate biti ulogovani da bi dodali proizvod u korpu!", "crveno");
            return;
          }
            korpa.dodaj(proizvod.id, proizvod.naziv, proizvod.cena, proizvod.slike[0].slika);
            poruke.poruka("Proizvod je uspešno dodat u korpu!", "zeleno");
            document.querySelector(
                "#korpa"
            ).innerHTML = `Korpa: ${formatiranje.format(
                korpa.ukupanIznos()
            )} din`;
        });
        divDesni.append(kupi);
        div.append(divDesni);
        return div;
    },

    prikazi(id) {
        for (let jedanProizvod of podaci) {
            if (jedanProizvod.id == id) {
                const el = this.odabranProizvod(jedanProizvod);
                document.querySelector("#proizvodi").append(el);
            }
        }
    }
};