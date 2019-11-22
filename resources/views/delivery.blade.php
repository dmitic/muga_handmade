@extends('layouts.app')

@section('pagesCss')
<link href="https://fonts.googleapis.com/css?family=Courgette|Dancing+Script|Pacifico&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/index.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/pages.css') }}">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
@endsection

<!-- @section('pocetna-link')
<li class="nav-item nav-cell ">
  <a class="nav-link font-color" href="{{ url('/') }}#start-section">Početna&nbspstrana</a>
</li>
@endsection -->

@section('content')
<div class="layer">
  <h1 class="h1">INFORMACIJE O ISPORUCI ROBE</h1>
  <h2>MUGA Handmade Shoes dostavlja svoje produkte na sledeće načine:</h2>
  <ul>
    <li>Unutar teritorije republike Srbije dostava se obavlja službom post express.</li>
    <li>Troškove dostave izmiruje kupac.</li>
    <li>Dostava se obavlja na adresu koja je naglašena na radnom nalogu koji je popunjen u trenutku porudžbine MUGA
      Handmade Shoes.</li>
    <li>Dostava se poručuje u roku od 24 sata od trenutka kada je kupac obavešten da je završena proizvodnja istog.</li>
    <li>
      <p>Paketi će biti uručeni u sledećim rokovima:</p>
      <ul>
        <li> - dva radna dana na užem dostavnom području pošte</li>
        <li> - tri radna dana na širem dostavnom području pošte</li>
        <li> - pet radnih dana na najširem dostavnom području pošte</li>
      </ul>
    </li>
  </ul>

  <p>U rokove prenosa i uručenja ne računaju se: dan prijema paketa, dani kada pošta ne radi ili kada ne vrši dostavu,
    odnosno isporuku paketa i dani državnih, verskih i drugih praznika koji se praznuju u Republici Srbiji.</p>

  <h4>INTERNACIONALNA DOSTAVA</h4>
  <ul>
    <li>Van teritorije republike Srbije dostava se obavlja službom post express - izvoz robe.</li>
    <li>Troškove dostave izmiruje kupac i oni su uračunati u finalnu cenu MUGA Handmade Shoes sa kojom su kupci saglasni
      u trenutku poručivanja istih.</li>
    <li>Dostava se zakazuje od trenutka kada se kupac obaveštava da je završena proizvodnja modela za koji se opredelio.
    </li>
    <li>Dostava se obavlja na adresu u inostranstvu koja je naglašena u trenutku porudžbine MUGA Handmade Shoes.</li>
    <li>
      <p>U očekivano vreme prenosa ne ulaze:</p>
      <ul>
        <li> - dan prijema paketa</li>
        <li> - neradni dani prijemnog i dostavnog operatora</li>
        <li> - vreme zadržavanja pošiljke na carinama</li>
        <li> - praznici koji se praznuju neradno kako kod prijemnog tako i kod dostavnog operatora</li>
        <li>*KUPAC MOŽE PRATITI STATUS SVOJE POŠILJKE KAO I OČEKIVANO VREME DOSTAVE NA SLEDEĆEM LIKU WEB SAJTA POŠTE
          SRBIJE:<a href="https://www.posta.rs/struktura/eng/aplikacije/alati/posiljke.asp."> www.posta.rs</a></li>
      </ul>
    </li>
    <li>Sva internacionalna dostava se obavlja avionskim saobraćajem</li>
  </ul>

  <h5>*** NAPOMENA ***</h5>
  <p class="note">U slučaju isporuke van teritorije republike Srbije MUGA Handmade Shoes produkti mogu biti predmet
    carinskih taksi u zemlji destinacije. Visina carinskih obaveza zavisi od carinskih zakona zemlje destinacije. Za
    dodatne informacije kupci trebaju da se obrate lokalnim carinskim službama. Sve carinske obaveze se plaćaju od
    strane kupca.</p>
  <p class="note">U slučaju neisporuke paketa sa MUGA Handmade Shoes produktima (zbog pogrešno naglašene adrese,
    telefonskog broja, kontinuiranog odsustva kupca, kao i odbijanje kupca da preuzme naručenu robu), MUGA Handmade
    Shoes ne preuzima odgovornost za povraćaj istog u zemlju porekla.</p>
  <p class="note">Sve dodatne informacije mogu se dobiti upitom na e-mail: <a
      href="mailto:milos.mit@gmail.com">milos.mit@gmail.com</a></p>


</div>
@endsection