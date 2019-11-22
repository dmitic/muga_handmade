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
    <h1>Tekst o reklamacijama</h1>
    <p>Poštovani kupci, <br>važno je naglasiti u slučaju nezadovoljstva klijenta vizuelnim izgledom finalnog produkta, da su svi produkti MUGA Handmade Shoes unikatni i potpadaju pod kategoriju limitirane obuće i samim tim se rade po ličnom izboru i željama klijenata, povraćaj novca nije moguća opcija od trenutka slanja vaše porudžbine, prijema i potvrde porudžbine od strane MUGA Handmade Shoes.</p>
    <p>Povraćaj MUGA Handmade Shoes modela u cilju popravke ili zamene sa novim parom cipela je moguć samo u slučaju fizickih oštećenja istog para cipela koji su nastali u procesu proizvodnje. Oštećenja koja MUGA Handmade Shoes prihvata su: fizičko ostećenje unutrašnjeg dela cipele ili tabanice nastalih u samom procesu proizvodnje.</p>
    <p>U slučaju povraćaja robe, ista mora biti neotpakovana, nekorišćena, neoštećena, sa netaknutim zvaničnim logom firme pošiljaoca</p>
    <p>Cena povratnog transporta ide na račun kupca. Garantni rok koji MUGA Handmade Shoes daje na svoje proizvode je 6 meseci od trenutka isporuke kupcu.</p>
    <p>Svi modeli koje MUGA Handmade Shoes ima u ponudi su predviđeni sa suho-hladno vreme, te samim tim produkti u okviru naše ponude <span>nisu predviđeni</span>  za nošenje po kišnom, jako kišnom i hladnom vremenu sa obilnim padavinama. MUGA Handmade Shoes zadržava diskreciono pravo da proces reklamacije i popravke mora finalizovati u periodu od 30 kalendarskih dana.</p>
    <h5>*** NAPOMENA ***</h5>
    <p class="note">MUGA Handmade Shoes je učinio sve napore da prikaže što detaljnije i profesionalnije sve boje i vrste repromaterijala (boje koža, đonova i pertli), koje su u ponudi na našem web sajtu.</p>
    <p class="note">MUGA Handmade Shoes ne može garantovati preciznost i kalibraciju vašeg monitora, te samim tim ne može tvrditi da postoji 100% preciznost u prikazu boja repromaterijala koje su korišćene pri kreiranu MUGA Handmade Shoes i završnog izgleda MUGA Handmade Shoes produkta, čime se firma ograđuje od podudarnosti u koloritima između finalnog produkta i boja koje se nalaze u ponudi na web sajtu.</p>
    </div>
@endsection