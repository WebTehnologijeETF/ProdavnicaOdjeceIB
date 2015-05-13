<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>I&amp;&Beta;</title>

<link rel="stylesheet" type="text/css" href="stil.css">

<script src="ZeneStablo.js"></script>
<script src="DodavanjeProizvodaAjax.js"></script>

<script src="BrisanjeProizvodAjax.js" ></script>
<script src="IzmjenaProizvodaAjax.js" ></script>
<script src="MuskarciStablo.js" ></script>
<script src="ValidacijaKontaktForme.js"></script>
<script src="Ajax.js"></script>
<script src="PrikaziProizvodeAjax.js"></script>
</head>
<body >
<div id="Traka">
<ul>
	<li id="Inicijali" class="Zajednicko">I&amp;&Beta;</li>
	<li id="Informacije" class="Zajednicko"> <a class="MenuLink" href="" onclick="loadXMLDoc3()">O nama</a></li>
	<li id="Zene" class="Zajednicko"><a class="MenuLink"  href="#" onclick="loadXMLDoc()">Žene</a></li>
	<li id="Muskarci" class="Zajednicko"><a class="MenuLink" href="#" onclick="loadXMLDoc1()">Muškarci</a></li>
	<li id="Kontakt" class="Zajednicko"><a class="MenuLink" href="#" onclick="loadXMLDoc4()">Kontakt</a></li>
	<li id="Dobavljaci" class="Zajednicko"><a class="MenuLink"  href="#" onclick="loadXMLDoc2()">Dobavljači</a></li>
	<li id="Administrator" class="Zajednicko"><a class="MenuLink" href="#" onclick="loadXMLDoc6()">Administrator</a></li>
</ul>
</div>
<div id="Stranica">
<div id="GlavniDio">
<?php
include "FunkcijeNovosti.php";
?>
	<div id="Novosti">
     <?php
     include "DodavanjeNovosti.php";
     ?>
 </div>

	</div>
     <div id="ONamaDio">
     	<p id="SlikeONamaDijela"> 
     		<img class="Zastave" alt="" src="http://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Flag_of_Croatia.svg/2000px-Flag_of_Croatia.svg.png">(2) 
     		<img class="Zastave" alt="" src="http://upload.wikimedia.org/wikipedia/commons/b/bf/Flag_of_Bosnia_and_Herzegovina.svg"> (5) <img class="Zastave" alt="" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTH0GPjyZGE7-075fRjnWv5AZIz4aKJNGEVySVpTJK5xk4dgervXvKEDXc"> (1)
     	 <img class="Zastave" alt="" src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQLH6NBODgFpD9Nmy62Wx8fxXC2Gq13BHLv102K2UMrEKyeHaGY3pCmlgM_">(2)</p>

     	<p id="NaslovONamaDijela"><b>O nama</b></p>
     	<p id="TekstDijelaONama">Vlasnik prodavnice odjeće I&amp;&Beta; je  Bosanac Ramo Ramić (1967.god). On je 2000. godine otvorio prvu poslovnicu prodavnice odjeće i to u Sarajevu (Bosna i Hercegovina). Do 2005. godine u poslovnicama I&amp;&Beta;, mogla se pronaći isključivo odjeća namjenjena za žene, ali to se promjenilo, te smo počeli nabavljati i mušku odjeću.</p><p>Prodavnica odjeće I&amp;&Beta;ima dugu tradiciju poslovanja, te na samom području Bosne i Hercegovine ima 5 poslovnica u 5 različitih gradova( Tuzla, Sarajevo, Mostar, Zenica i Graćanica). Također, I&amp;&Beta; ima otvorene po dvije poslovnice u Sloveniji i Hrtvatskoj, te jednu poslovnicu u Srbiji. Svoju odjeću dobavljamo isključivo od dobavljača iz Bangladeša,Turske,Australije i Njemačke.</p>
     	<p>Za sada prodavnica odjeće I&amp;&Beta; ima svega 10 poslovnica, u kojim je zaposleno ukupno 50 radnika.</p>
     	<p>Kupcima nudimo garanciju od mjesec, na svaki kupljeni proizvod. U tom vremenskom periodu može doći u poslovnicu, gdje je kupio proizvod i zaposlenici će izvršit zamjenu ili povrat novca.</p>
     	<p class="LinkTabele">Dodatne informacije o svim našim poslovnica možete naći <a class="OvdjeLink" href="#" onClick="loadXMLDoc5()">Ovdje</a> .</p>
      </div>
</div>
</body>
</html>