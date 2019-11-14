korpa.ucitaj_iz_session();
const proizvod = {
    nadji_ID: function() {
        let loc = window.location.href;
        let a1 = loc.split("/");
        return a1[a1.length-1];
    },

    odabranProizvod: function(proizvod) {
        // console.log(proizvod);

        // const divRow = document.createElement("div");
        // divRow.className = "row";

        const div = document.createElement("div");
        div.className = "proizvod-detaljnije row col-md-12";

        // za carousel
        let carousel = `<div class="col-md-6"><div class="row d-flex justify-content-center">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="max-height:800px; max-width:800px;">
            <div class="carousel-inner" style="max-height:800px; max-width:800px;">`
            
            proizvod.slike.forEach((slika, ind)=>{
                if (ind === 0)
                    carousel += `<div class="carousel-item active">`;
                else
                    carousel += `<div class="carousel-item">`;
                carousel +=`<img src='/images/${slika.slika}' class="d-block w-100 img-responsive" style="max-height:800px; max-width:800px;" alt="...">
                </div>`
            })
            
            carousel += `</div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
            </div></div>`;

        div.innerHTML = carousel;

        // const img = document.createElement('img');
        // img.src = `/images/${proizvod.slike[0].slika}`;
        // img.alt = `${proizvod.naziv}`;
        // img.className = 'slika-velika';
        // div.append(img);

        const divDesni = document.createElement("div");
        divDesni.className = "col-md-6";

        const tabela = document.createElement("table");
        tabela.className = "tabela";

        for (let naziv in proizvod) {
            if (naziv !== 'id' && naziv !== 'created_at' && naziv !== 'updated_at' && naziv !== 'slike'){
              const tr = document.createElement('tr');
              const tdKey = document.createElement('td');
              const tdValue = document.createElement('td');

              tdKey.textContent = `${naziv.replace('_', ' ')}:`;
              tdKey.className = "tdKey";
              (naziv === 'cena') ? tdValue.innerHTML = `<strong>${formatiranje.format(Number(proizvod[naziv]))} RSD</strong>` : tdValue.innerHTML = `<strong>${proizvod[naziv]}</strong>`;
              (naziv === 'opis') ? 
                        tdValue.innerHTML = `<strong>${(proizvod[naziv] == null) ?
                                'Trenutno nema opisa' : proizvod[naziv]}</strong>` : 
                                tdValue.innerHTML = `<strong>${proizvod[naziv]}</strong>`;
                (naziv === 'napomena') ? 
                    tdValue.innerHTML = `<strong>${(proizvod[naziv] == null) ?
                        'Trenutno nema napomene' : proizvod[naziv]}</strong>` : 
                        tdValue.innerHTML = `<strong>${proizvod[naziv]}</strong>`;

              tr.append(tdKey);
              tr.append(tdValue)
              tabela.append(tr);
            }
        }

        divDesni.append(tabela);
        // div.append(tabela);

        const kupi = document.createElement("button");
        kupi.className = "btnKupi";
        kupi.textContent = "Kupi";
        kupi.addEventListener("click", () => {
          if(user_id === -1){
            // alert("Morate biti ulogovani da bi dodali proizvod u korpu!");
            poruke.poruka("Morate biti ulogovani da bi dodali proizvod u korpu!", "crveno");
            return;
          }
            korpa.dodaj(user_id, proizvod.id, proizvod.naziv, proizvod.cena, proizvod.slike[0].slika);
            poruke.poruka("Proizvod je uspešno dodat u korpu!", "zeleno");
            document.querySelector(
                "#korpa"
            ).innerHTML = `Korpa: ${formatiranje.format(
                korpa.ukupanIznos()
            )} din`;
        });
        divDesni.append(kupi);

        // divDesni.append(div);

        div.append(divDesni);
        return div;
    },

    prikazi: function(id) {
        for (let jedanProizvod of podaci) {
            if (jedanProizvod.id == id) {
                const el = this.odabranProizvod(jedanProizvod);
                document.querySelector("#proizvodi").append(el);
            }
        }
    }
};

// proizvod.prikazi(proizvod.nadji_ID(2));
