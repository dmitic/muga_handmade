
// const formatiranje = new Intl.NumberFormat("sr-SR", {
//     minimumFractionDigits: 2
// });

// console.log(user_id);

const proizvodi = {

    prikaziProizvod: function(proizvod) {
        const div = document.createElement("div");

        const link = document.createElement("a");
        link.className = "linkovi";
        link.href = `detaljnije/${proizvod.id}`;
        div.className = "proizvod";

        const img = document.createElement("img");
        img.src = `images/${proizvod.slike[0].slika}`;
        img.alt = `${proizvod.naziv}`;
        img.className = "img-mala";
        link.append(img);
        div.append(link);

        const naziv = document.createElement("p");
        naziv.innerHTML = `<strong>${proizvod.naziv}</strong>`;
        div.append(naziv);

        const cena = document.createElement("p");
        cena.innerHTML = `Cena: <strong>${formatiranje.format(
            proizvod.cena
        )}</strong> dinara`;
        const detaljnije = document.createElement("button");
        detaljnije.className = "btnDetaljnije";
        detaljnije.textContent = "Detaljnije";
        div.append(naziv, cena);

        const linkDetaljnije = document.createElement("a");
        linkDetaljnije.className = "linkovi";
        linkDetaljnije.href = `/detaljnije/${encodeURIComponent(
            proizvod.id
        )}`;
        linkDetaljnije.append(detaljnije);
        div.append(linkDetaljnije);

        const kupi = document.createElement("button");
        kupi.className = "btnKupi";
        kupi.textContent = "Kupi";
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

        div.append(kupi);
        return div;
    },

    prikaziSve: function(nizProizvoda) {
        this.getInput("proizvodi").innerHTML = "";
        for (let proizvod of nizProizvoda) {
            const el = this.prikaziProizvod(proizvod);
            this.getInput("proizvodi").append(el);
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
            this.getInput("proizvodi").innerHTML = "";
            this.nePostoji("Nema proizvoda u tom cenovnom rasponu!");
        } else {
            this.prikaziSve(niz);
        }
    },

    sortiranje: function(polje, sort, data) {
        this.getInput("inp").value = "";
        this.getInput("minCena").value = "";
        this.getInput("maxCena").value = "";
        if (polje === 'cena')
            data.sort((p1, p2) => (Number(p1[polje]) > Number(p2[polje])) ? sort : -sort);
        else
            data.sort((p1, p2) => (p1[polje] > p2[polje] ? sort : -sort));
        this.prikaziSve(data);
    },

    nePostoji: function(msg) {
        const div = document.createElement("div");
        div.className = "proizvod-nema";
        div.innerHTML = msg;
        this.getInput("proizvodi").append(div);
    },
    getInput: function(trazeniId) {
        return document.querySelector(`#${trazeniId}`);
    },

};

proizvodi.getInput('btnIme').addEventListener('click', () => {
    const inp = proizvodi.getInput('inp').value;
    axios('http://127.0.0.1:8000/json')
        .then(res => proizvodi.pretragaPoNazivu(inp, res.data))
        .catch(err => console.error(err));
});

proizvodi.getInput('btnMaxCena').addEventListener('click', () => {
    let inp = Number(proizvodi.getInput('maxCena').value);
    if (!inp) inp = Infinity;
    axios.get('http://127.0.0.1:8000/json')
        .then(res => proizvodi.pretragaPoCeni(inp, 'max', res.data))
        .catch(err => console.error(err));
});

proizvodi.getInput('btnMinCena').addEventListener('click', () => {
    let inp = Number(proizvodi.getInput('minCena').value);
    if (!inp) inp = -Infinity;
    axios.get('http://127.0.0.1:8000/json')
        .then(res => proizvodi.pretragaPoCeni(inp, 'min', res.data))
        .catch(err => console.error(err));
});

proizvodi.getInput('boja').addEventListener('change', () => {
    const boja = proizvodi.getInput('boja').value;
    axios.get('http://127.0.0.1:8000/json')
        .then(res => proizvodi.pretragaPoBoji(boja, res.data))
        .catch(err => console.error(err));
});

proizvodi.getInput('sezona').addEventListener('change', () => {
    const sezona = proizvodi.getInput('sezona').value;
    axios.get('http://127.0.0.1:8000/json')
        .then(res => proizvodi.pretragaPoSezoni(sezona, res.data))
        .catch(err => console.error(err));
});

proizvodi.getInput('pol').addEventListener('change', () => {
    const pol = proizvodi.getInput('pol').value;
    axios.get('http://127.0.0.1:8000/json')
        .then(res => proizvodi.pretragaPoPolu(pol, res.data))
        .catch(err => console.error(err));
});

proizvodi.getInput('polje').addEventListener('change', () => {
    const polje = proizvodi.getInput('polje').value;
    const sortiranje = proizvodi.getInput('sort').value;
    axios.get('http://127.0.0.1:8000/json')
        .then(res => proizvodi.sortiranje(polje, sortiranje, res.data))
        .catch(err => console.error(err));
});

proizvodi.getInput('sort').addEventListener('change', () => {
    const polje = proizvodi.getInput('polje').value;
    const sortiranje = proizvodi.getInput('sort').value;
    axios.get('http://127.0.0.1:8000/json')
        .then(res => proizvodi.sortiranje(polje, sortiranje, res.data))
        .catch(err => console.error(err));
});

// za entere
proizvodi.getInput('inp').addEventListener('keyup',(e) => {
    if (e.keyCode === 13) {
    const inp = proizvodi.getInput('inp').value;
    axios.get('http://127.0.0.1:8000/json')
        .then(res => proizvodi.pretragaPoNazivu(inp, res.data))
        .catch(err => console.error(err));
  }
});

proizvodi.getInput('maxCena').addEventListener('keyup',(e) => {
    if (e.keyCode === 13) {
        let inp = Number(proizvodi.getInput('maxCena').value);
        if (!inp) inp = Infinity;
        axios.get('http://127.0.0.1:8000/json')
            .then(res => proizvodi.pretragaPoCeni(inp, 'max', res.data))
            .catch(err => console.error(err));
  }
});

proizvodi.getInput('minCena').addEventListener('keyup',(e) => {
    let inp = Number(proizvodi.getInput('maxCena').value);
    if (e.keyCode === 13) {
        let inp = Number(proizvodi.getInput('minCena').value);
        if (!inp) inp = -Infinity;
        axios.get('http://127.0.0.1:8000/json')
            .then(res => proizvodi.pretragaPoCeni(inp, 'min', res.data))
            .catch(err => console.error(err));
  }
});