# Muga Handmade Shoes Shop

Aplikacija je rađena ua klijenta koji se bavi ručnom izradom obuće tako da nema stanje već sve pravi po porudžbini.

## Tehnologije izrade

Za izradu korisničkog interfejsa (UI) korišćen je primarno [bootstrap](https://getbootstrap.com/), kao i custom CSS za određene delove UI-a. Za samu Front End funkcionalnost aplikacije korišćen je HTML i javascript. Za funkcionalnost Back End dela koriščen je PHP jezik unutar [Laravel razvojnog okruženja](https://laravel.com/). Laravel je obuhvatio glavni deo aplikacije, ceo admin deo, sve kontrolne panale, njihovu funkcionalnost, validaciju podataka, slanje mejlova. Ceo frontend, prethodno naveden, je na kraju integrisan u okviru Laravela.

## Šema baze

![Šema baze](https://github.com/dmitic/muga_handmade/blob/master/shema%20baze.png)

## Struktura

Sama aplikacija je zamišljena kao svojevrsna online reklama proizvoda i web šop, u real verziji neće biti cena jer su mu i cene po dogovoru.

## Uputstvo

Naša aplikacija sadrži tri role (uloge):
- guest (U mogućnosti je da vidi sve strane aplikacije, sem korpe, korisničkog i admin panela. Ne može da poručuje proizvode. Ali ima mogućnost pregleda proizvoda, kao i njihovog sortiranja i filtriranja.)
- korisnik (U mogućnosti je da vidi sve strane, sem admin panela. Ima mogućnost dodavanja proizvoda u korpu i vršenja narudžbina. Pored toga, ima pristup osnovnom korisničkom panelu, u kome ima mogućnost da doda više info o sebi, promena šifre, i uvid u svoje porudžbine kao i njihov status, mogućnost štampanja fakture.)
- administrator (U mogućnosti je da vidi sve strane, sve što i prethodne role, kao i pristup samom admin panelu. U okviru koga dodaje nove proizvode, vrši editovanje i brisanje postojećih, ima pregled svih korisnika, vrši promenu podataka korisnika, promenu šifri korisnika i brisanje korisnika. Ima pregled svih narudžbenica, i mogućnost realizovanja i brisanja istih, mogućnost štampanja fakture. Takođe ima mogućnost pretraga, na osnovu raznih parametara korisnika, proizvoda i narudžbenica. )

## O nama
U izradi ove aplikacije, učestvovala je mala ekipa, od tri člana, PHP 2 grupe, u sastavu: Ivana Milosavljević, Dragan Mitić, Bojan Matejević. 


