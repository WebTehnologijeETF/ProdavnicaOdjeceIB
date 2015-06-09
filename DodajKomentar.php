<?php
session_start();
?>

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
<script type="text/javascript">
    setInterval(function(){ 
  var xmlhttp;
  //alert("Ilvana");
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
     }, 3600000);

</script>
</head>

<body >
  <div id="Prijava">
    <?php
    if(!isset($_SESSION['username']))
    {
       include "PrijavaObicna.html";
    }
    else
    {
      include "OdjavaObicna.php";
    }
    ?>
</div>
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

$id1=$_POST['id'];
$tekst1=$_POST['komentar'];
$korisnik="Anoniman";

if(isset($_SESSION['username']))
{
  echo $_SESSION['username'];
  $korisnik=$_SESSION['username'];
}

$veza = new PDO("mysql:dbname=prodavnicaodjeceibbaza;host=localhost;charset=utf8", "ilvana", "ilvana");
     $veza->exec("set names utf8");

$prep=$veza->prepare('INSERT INTO komentar(novost,tekst,vrijeme,korisnikstranice) VALUES(:novost,:tekst,CURRENT_TIMESTAMP,:korisnikstranice)');
echo "string";
$prep->bindParam(":novost",$id1);
$prep->bindParam(":korisnikstranice",$korisnik);
$prep->bindParam(":tekst",$tekst1);
if($tekst1!="")
{
$prep->execute();
echo "1";
}

//echo "<script type='text/javascript'>alert('Slanje Vašeg komentara je bilo uspješno.')</script>";+
include "komentarinovi.php";
?>
</div>
</body>
</html>