const proizvodi = {
    prikaziProizvod: function(proizvod) {
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

    prikaziSve: function(nizProizvoda) {
        this.getInput("shoes-collection").innerHTML = "";
        for (let proizvod of nizProizvoda) {
            const el = this.prikaziProizvod(proizvod);
            // this.getInput("proizvodi").append(el);
            this.getInput("shoes-collection").innerHTML += el;
        }
    },
    pretragaPoNazivu: function(inpProizvod, data) {
        this.getInput("minCena").value = "";
        this.getInput("maxCena").value = "";
        const niz = data.filter(proizvod =>
            proizvod.naziv.toLowerCase().includes(inpProizvod.toLowerCase())
        );
        this.prikaziSve(niz);
        if (niz.length === 0) {
            this.nePostoji("Traženi proizvod ne postoji!");
        }

        // vraća na sekciju kolekcije
        document.getElementById("shoes-collection").scrollIntoView(true);

    },

    pretragaPoBoji: function(inpBoja, data) {
        this.getInput("minCena").value = "";
        this.getInput("maxCena").value = "";
        const niz = data.filter(proizvod =>
            proizvod.boja.toLowerCase().includes(inpBoja.toLowerCase())
        );
        this.prikaziSve(niz);
        if (niz.length === 0) {
            this.nePostoji("Traženi proizvod ne postoji!");
        }
        document.getElementById("shoes-collection").scrollIntoView(true);
    },

    pretragaPoSezoni: function(inpSezona, data) {
        this.getInput("minCena").value = "";
        this.getInput("maxCena").value = "";
        const niz = data.filter(proizvod =>
            proizvod.sezona.toLowerCase().includes(inpSezona.toLowerCase())
        );
        this.prikaziSve(niz);
        if (niz.length === 0) {
            this.nePostoji("Traženi proizvod ne postoji!");
        }
        document.getElementById("shoes-collection").scrollIntoView(true);
    },

    pretragaPoPolu: function(inpPol, data) {
        this.getInput("minCena").value = "";
        this.getInput("maxCena").value = "";
        const niz = data.filter(proizvod =>
            proizvod.pol.toLowerCase().includes(inpPol.toLowerCase())
        );
        this.prikaziSve(niz);
        if (niz.length === 0) {
            this.nePostoji("Traženi proizvod ne postoji!");
        }
        document.getElementById("shoes-collection").scrollIntoView(true);
    },

    pretragaPoCeni: function(inpCena, nacin, data) {
        let niz = [];
        if (nacin === "max") {
            this.getInput("minCena").value = "";
            this.getInput("inp").value = "";
            niz = data.filter(proizvod => proizvod.cena <= inpCena);
        }
        if (nacin === "min") {
            this.getInput("maxCena").value = "";
            this.getInput("inp").value = "";
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

    sortiranje: function(polje, sort, data) {
        this.getInput("inp").value = "";
        this.getInput("minCena").value = "";
        this.getInput("maxCena").value = "";
        if (polje === "cena")
            data.sort((p1, p2) =>
                Number(p1[polje]) > Number(p2[polje]) ? sort : -sort
            );
        else data.sort((p1, p2) => (p1[polje] > p2[polje] ? sort : -sort));
        this.prikaziSve(data);
        document.getElementById("shoes-collection").scrollIntoView(true);
    },

    nePostoji: function(msg) {
        const div = document.createElement("div");
        div.className = "proizvod-nema";
        div.innerHTML = msg;
        this.getInput("shoes-collection").append(div);
        document.getElementById("shoes-collection").scrollIntoView(true);
    },
    getInput: function(trazeniId) {
        return document.querySelector(`#${trazeniId}`);
    }
};

proizvodi.getInput("btnIme").addEventListener("click", () => {
    const inp = proizvodi.getInput("inp").value;
    axios("http://127.0.0.1:8000/json")
        .then(res => proizvodi.pretragaPoNazivu(inp, res.data))
        .catch(err => console.error(err));
});

proizvodi.getInput("btnMaxCena").addEventListener("click", () => {
    let inp = Number(proizvodi.getInput("maxCena").value);
    if (!inp) inp = Infinity;
    axios
        .get("http://127.0.0.1:8000/json")
        .then(res => proizvodi.pretragaPoCeni(inp, "max", res.data))
        .catch(err => console.error(err));
});

proizvodi.getInput("btnMinCena").addEventListener("click", () => {
    let inp = Number(proizvodi.getInput("minCena").value);
    if (!inp) inp = -Infinity;
    axios
        .get("http://127.0.0.1:8000/json")
        .then(res => proizvodi.pretragaPoCeni(inp, "min", res.data))
        .catch(err => console.error(err));
});

proizvodi.getInput("boja").addEventListener("change", () => {
    const boja = proizvodi.getInput("boja").value;
    axios
        .get("http://127.0.0.1:8000/json")
        .then(res => proizvodi.pretragaPoBoji(boja, res.data))
        .catch(err => console.error(err));
});

proizvodi.getInput("sezona").addEventListener("change", () => {
    const sezona = proizvodi.getInput("sezona").value;
    axios
        .get("http://127.0.0.1:8000/json")
        .then(res => proizvodi.pretragaPoSezoni(sezona, res.data))
        .catch(err => console.error(err));
});

proizvodi.getInput("pol").addEventListener("change", () => {
    const pol = proizvodi.getInput("pol").value;
    axios
        .get("http://127.0.0.1:8000/json")
        .then(res => proizvodi.pretragaPoPolu(pol, res.data))
        .catch(err => console.error(err));
});

proizvodi.getInput("polje").addEventListener("change", () => {
    const polje = proizvodi.getInput("polje").value;
    const sortiranje = proizvodi.getInput("sort").value;
    axios
        .get("http://127.0.0.1:8000/json")
        .then(res => proizvodi.sortiranje(polje, sortiranje, res.data))
        .catch(err => console.error(err));
});

proizvodi.getInput("sort").addEventListener("change", () => {
    const polje = proizvodi.getInput("polje").value;
    const sortiranje = proizvodi.getInput("sort").value;
    axios
        .get("http://127.0.0.1:8000/json")
        .then(res => proizvodi.sortiranje(polje, sortiranje, res.data))
        .catch(err => console.error(err));
});

// za entere
proizvodi.getInput("inp").addEventListener("keyup", e => {
    if (e.keyCode === 13) {
        const inp = proizvodi.getInput("inp").value;
        axios
            .get("http://127.0.0.1:8000/json")
            .then(res => proizvodi.pretragaPoNazivu(inp, res.data))
            .catch(err => console.error(err));
    }
});

proizvodi.getInput("maxCena").addEventListener("keyup", e => {
    if (e.keyCode === 13) {
        let inp = Number(proizvodi.getInput("maxCena").value);
        if (!inp) inp = Infinity;
        axios
            .get("http://127.0.0.1:8000/json")
            .then(res => proizvodi.pretragaPoCeni(inp, "max", res.data))
            .catch(err => console.error(err));
    }
});

proizvodi.getInput("minCena").addEventListener("keyup", e => {
    let inp = Number(proizvodi.getInput("maxCena").value);
    if (e.keyCode === 13) {
        let inp = Number(proizvodi.getInput("minCena").value);
        if (!inp) inp = -Infinity;
        axios
            .get("http://127.0.0.1:8000/json")
            .then(res => proizvodi.pretragaPoCeni(inp, "min", res.data))
            .catch(err => console.error(err));
    }
});