
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>I&amp;&Beta;</title>

<link rel="stylesheet" type="text/css" href="stil.css">
<link rel="shortcut icon" href="http://www.clker.com/cliparts/3/z/E/1/d/Q/blue-circle-flame-md.png">

<script src="ZeneStablo.js"></script>
<script src="DodavanjeProizvodaAjax.js"></script>
<script src="BrisanjeProizvodAjax.js" ></script>
<script src="ResetButton.js"></script>
<script src="IzmjenaProizvodaAjax.js" ></script>
<script src="MuskarciStablo.js" ></script>
<script src="ValidacijaKontaktForme.js"></script>
<script src="Ajax.js"></script>
<script type="text/javascript">
    setInterval(function(){ 
  var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("Novosti").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","DodavanjeNovosti.php",true);
xmlhttp.send();
     }, 3660);

</script>
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

$tekst="";
$sazetak="";
$naslov="";
$autor="";
$slika="";

$veza = new PDO("mysql:dbname=prodavnicaodjeceibbaza;host=localhost;charset=utf8", "ilvana", "ilvana");
$veza->exec("set names utf8");
$svenovosti=$veza->query("SELECT id,naslov,autor,slika,sazetak,tekst,datum FROM novost");

     foreach ($svenovosti as $key ) {
     	if(strcmp($_GET['id1'], $key['id'])==0)
     	{
     	$tekst=$key['tekst'];
     	$sazetak=$key['sazetak'];
     	$naslov=$key['naslov'];
     	$autor=$key['autor'];
     	$slika=$key['slika'];
     }
     }

if($_GET['tekst']!="")
$tekst=$_GET['tekst'];

if($_GET['sazetak']!="")
$sazetak=$_GET['sazetak'];

if($_GET['naslov']!="")
$naslov=$_GET['naslov'];

if($_GET['autor']!="")
$autor=$_GET['autor'];

if($_GET['slika']!="")
$slika=$_GET['slika'];

$mijenjaj=$veza->prepare("UPDATE novost set tekst=:tekst, sazetak=:sazetak, naslov=:naslov, autor=:autor, slika=:slika WHERE id=:id ");
$mijenjaj->bindParam(":tekst",$tekst);
$mijenjaj->bindParam(":sazetak",$sazetak);
$mijenjaj->bindParam(":naslov",$naslov);
$mijenjaj->bindParam(":autor",$autor);
$mijenjaj->bindParam(":slika",$slika);
$mijenjaj->bindParam(":id",$_GET['id1']);
$mijenjaj->execute();

include "OperacijeNovosti.php";
?>
</div>
</body>
</html>

