const proizvodi = {
    prikaziProizvod(proizvod) {
        // console.log(proizvod);
        let slika = (proizvod.slike.length > 0) ? proizvod.slike[0].slika : 'no-image.png';
        const div = `
        <div class="col-9 col-sm-6 col-md-6 col-lg-4 p-2 d-flex align-items-stretch">
            <div class="card ">
            <a href="/detaljnije/${proizvod.id}" class="card-link ">
              <img src="images/${slika}" class="card-img-top p-md-2 p-sm-1" alt="${proizvod.naziv}">
            </a>
              <div class="card-body">
                <h3 class="card-title">
                    <strong>
                        <a href="/detaljnije/${proizvod.id}" class="card-link font-srednji">${proizvod.naziv}</a>
                    </strong>
                </h3>
                <p class="card-text">${proizvod.opis !== null? proizvod.opis: "Trenutno ne postoji opis..."}</p>
            </div>
                <span class="card-text text-right card-link font_size mb-3"><a href="/detaljnije/${proizvod.id}" class="card-link ">Detaljnije</a></span>
                <span class="card-footer text-center font_size_cena">${formatiranje.format(proizvod.cena)} RSD</span>
            </div>
          </div>`;
  
        return div;
    },
  
    prikaziSve(nizProizvoda) {
        this.getInput("shoes-collection").innerHTML = "";
        // for (let i = 0; i < nizProizvoda.length; i++){
            // const el = this.prikaziProizvod(nizProizvoda[i]);
        for (let proizvod of nizProizvoda) {
            const el = this.prikaziProizvod(proizvod);
            this.getInput("shoes-collection").innerHTML += el;
        }
    },
    
    pretragaPoNazivu(inpProizvod, data) {
        this.resetPolja('inp');
        const niz = data.filter(proizvod =>
            proizvod.naziv.toLowerCase().includes(inpProizvod.toLowerCase())
        );
        this.prikaziSve(niz);
        if (niz.length === 0) this.nePostoji("Traženi proizvod ne postoji!");
        // vraća na sekciju kolekcije
        document.getElementById("shoes-collection").scrollIntoView(true);
    },
  
    pretragaPoBoji(inpBoja, data) {
        this.resetPolja('boja');
        const niz = data.filter(proizvod =>
            proizvod.boja.toLowerCase().includes(inpBoja.toLowerCase())
        );
        this.prikaziSve(niz);
        if (niz.length === 0) this.nePostoji("Traženi proizvod ne postoji!");
        document.getElementById("shoes-collection").scrollIntoView(true);
    },
  
    pretragaPoSezoni(inpSezona, data) {
        this.resetPolja('sezona');
        const niz = data.filter(proizvod =>
            proizvod.sezona.toLowerCase().includes(inpSezona.toLowerCase())
        );
        this.prikaziSve(niz);
        if (niz.length === 0) this.nePostoji("Traženi proizvod ne postoji!");
        document.getElementById("shoes-collection").scrollIntoView(true);
    },
    
    pretragaPoPolu(inpPol, data) {
        this.resetPolja('pol');
        const niz = data.filter(proizvod =>
            proizvod.pol.toLowerCase().includes(inpPol.toLowerCase())
        );
        this.prikaziSve(niz);
        if (niz.length === 0) this.nePostoji("Traženi proizvod ne postoji!");
        document.getElementById("shoes-collection").scrollIntoView(true);
    },
  
    pretragaPoCeni(inpCena, nacin, data) {
        inpCena = Number(inpCena);
        let niz = [];
        if (nacin === "max") {
            this.resetPolja('maxCena');
            niz = data.filter(proizvod => proizvod.cena <= inpCena);
        }
        if (nacin === "min") {
            this.resetPolja('minCena');
            niz = data.filter(proizvod => proizvod.cena >= inpCena);
        }
        if (niz.length === 0) {
            this.getInput("shoes-collection").innerHTML = "";
            this.nePostoji("Nema proizvoda u tom cenovnom rasponu!");
        } else {
            this.prikaziSve(niz);
        }
        document.getElementById("shoes-collection").scrollIntoView(true);
    },
  
    sortiranje(polje, sort, data) {
        this.resetPolja();
        if (polje === "cena")
            data.sort((p1, p2) =>
                Number(p1[polje]) > Number(p2[polje]) ? sort : -sort
            );
        else data.sort((p1, p2) => (p1[polje] > p2[polje] ? sort : -sort));
        this.prikaziSve(data);
        document.getElementById("shoes-collection").scrollIntoView(true);
    },

    resetPolja(idPolja = ''){
        if(idPolja !== "inp")
            this.getInput("inp").value = "";
        if(idPolja !== "minCena")
            this.getInput("minCena").value = "";
        if(idPolja !== "maxCena")
            this.getInput("maxCena").value = "";
        if(idPolja !== "sezona")
            this.getInput("sezona").value = "";
        if(idPolja !== "pol")
            this.getInput("pol").value = "";
        if(idPolja !== "boja")
            this.getInput("boja").value = "";
    },
  
    nePostoji(msg) {
        const div = document.createElement("div");
        div.className = "proizvod-nema";
        div.innerHTML = msg;
        this.getInput("shoes-collection").append(div);
        document.getElementById("shoes-collection").scrollIntoView(true);
    },
  
    getInput(trazeniId) {
        return document.querySelector(`#${trazeniId}`);
    },
  
    aksiosUpit(inp, attr = '') {
        let vr = this.getInput(inp).value;
        axios
            .get("http://127.0.0.1:8000/json")
            .then(res => {
                if (inp === 'inp')
                    this.pretragaPoNazivu(vr, res.data);
                if (inp === 'boja')
                    this.pretragaPoBoji(vr, res.data);
                if (inp === 'sezona')
                    this.pretragaPoSezoni(vr, res.data);
                if (inp === 'pol')
                    this.pretragaPoPolu(vr, res.data);
                if (inp === 'maxCena') {
                    if (vr === '') vr = Infinity;
                    this.pretragaPoCeni(vr, attr, res.data);
                }
                if (inp === 'minCena') {
                    if (vr === '') vr = -Infinity;
                    this.pretragaPoCeni(vr, attr, res.data);
                }
                if (inp === 'polje')  {
                    attr = proizvodi.getInput("sort").value;
                    this.sortiranje(vr, attr, res.data);
                }
            })
            .catch(err => console.error(err));
    }
  };
  
  proizvodi.getInput("btnIme").addEventListener("click", () => {
    proizvodi.aksiosUpit('inp');
  });
  
  proizvodi.getInput("boja").addEventListener("change", () => {
    proizvodi.aksiosUpit('boja');
  });
  
  proizvodi.getInput("sezona").addEventListener("change", () => {
    proizvodi.aksiosUpit('sezona');
  });
  
  proizvodi.getInput("pol").addEventListener("change", () => {
    proizvodi.aksiosUpit('pol');
  });
  
  proizvodi.getInput("btnMaxCena").addEventListener("click", () => {
    proizvodi.aksiosUpit('maxCena', 'max');
  });
  
  proizvodi.getInput("btnMinCena").addEventListener("click", () => {
    proizvodi.aksiosUpit('minCena', 'min');
  });
  
  proizvodi.getInput("polje").addEventListener("change", () => {
    proizvodi.aksiosUpit('polje', 'sort');
  });
  
  proizvodi.getInput("sort").addEventListener("change", () => {
    proizvodi.aksiosUpit('polje', 'sort');
  });
  
  // za entere
  proizvodi.getInput("inp").addEventListener("keyup", (e) => {
    if (e.keyCode === 13) proizvodi.aksiosUpit('inp');
  });
  
  proizvodi.getInput("maxCena").addEventListener("keyup", (e) => {
    if (e.keyCode === 13) proizvodi.aksiosUpit('maxCena', 'max');
  });
  
  proizvodi.getInput("minCena").addEventListener("keyup", (e) => {
    if (e.keyCode === 13) proizvodi.aksiosUpit('minCena', 'min');
  });