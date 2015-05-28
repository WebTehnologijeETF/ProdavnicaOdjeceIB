
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>I&amp;&Beta;</title>

<link rel="stylesheet" type="text/css" href="stil.css">

<script src="ZeneStablo.js"></script>
<script src="DodavanjeProizvodaAjax.js"></script>
<script src="BrisanjeProizvodAjax.js" ></script>
<script src="ResetButton.js"></script>
<script src="IzmjenaProizvodaAjax.js" ></script>
<script src="MuskarciStablo.js" ></script>
<script src="ValidacijaKontaktForme.js"></script>
<script src="Ajax.js"></script>
<script src="PrikaziProizvodeAjax.js"></script>
<script src="ValidacijaKorisniciForme.js"></script>
<script src="ValidacijaBrisanjaKomentara.js"></script>
<script src="ValidacijaNovosti.js"></script>
</head>

<body >
<div id="Traka">
<ul>
	<li id="Inicijali" class="Zajednicko">I&amp;&Beta;</li>
	<li id="Informacije" class="Zajednicko"> <a class="MenuLink" href="#" onclick="loadXMLDoc3()">O nama</a></li>
	<li id="Zene" class="Zajednicko"><a class="MenuLink"  href="#" onclick="loadXMLDoc()">Žene</a></li>
	<li id="Muskarci" class="Zajednicko"><a class="MenuLink" href="#" onclick="loadXMLDoc1()">Muškarci</a></li>
	<li id="Kontakt" class="Zajednicko"><a class="MenuLink" href="#" onclick="loadXMLDoc4()">Kontakt</a></li>
	<li id="Dobavljaci" class="Zajednicko"><a class="MenuLink"  href="#" onclick="loadXMLDoc2()">Dobavljači</a></li>
	<li id="Administrator" class="Zajednicko"><a class="MenuLink" href="#" onclick="loadXMLDoc6()">Administrator</a></li>
</ul>
</div>

<div id="Stranica">
<?php 

$novokorisnickoime=$_GET['korisnickoime'];
$novimail="";
$novipassword="";
$nemaid=0;
$veza = new PDO("mysql:dbname=prodavnicaodjeceibbaza;host=localhost;charset=utf8", "ilvana", "ilvana");
$veza->exec("set names utf8");
$svikorisnici=$veza->query("SELECT korisnickoime,email,sifra FROM korisnik");
foreach ($svikorisnici as $key ) {
	if(strcmp($novokorisnickoime,$key['korisnickoime'])==0)
	{
		$novimail=$key['email'];
		$novipassword=$key['sifra'];
	}
}
if($_GET['korisnickoime']=="")
{
	$nemaid=1;
}

if($_GET['email']!="")
	$novimail=$_GET['email'];

if($_GET['password']!="")
	$novipassword=$_GET['password'];

if($nemaid==0)
{
$mijenjaj=$veza->prepare("UPDATE korisnik SET email=:email, sifra=:sifra WHERE korisnickoime=:korisnickoime");
$mijenjaj->bindParam(":email",$novimail);
$hash=md5($novipassword);
$mijenjaj->bindParam(":sifra",$hash);
$mijenjaj->bindParam(":korisnickoime",$novokorisnickoime);
$mijenjaj->execute();
}
include "OperacijeKorisnici.php";
?>
</div>
</body>
</html>