<?php 
session_start();
?>
<?php
function zag() {
    header("{$_SERVER['SERVER_PROTOCOL']} 200 OK");
    header('Content-Type: text/html');
    header('Access-Control-Allow-Origin: *');
}
function rest_get($request, $data) { 
  
if(isset($_SESSION['username']))
{
  $username=$_SESSION['username'];
  //echo '<div id="Prijava"><p id="Prijava">Već ste se prijavili.</p></div>';
 
}
else if(isset($_GET['adminime']) && isset($_GET['adminsifra']))
{
    $brojac=0;
     $veza = new PDO("mysql:dbname=prodavnicaodjeceibbaza;host=localhost;charset=utf8", "ilvana", "ilvana");
     $veza->exec("set names utf8");
    $mijenjaj=$veza->query("SELECT korisnickoime,email,sifra,tip FROM korisnik");
    //print_r($mijenjaj);
     foreach ($mijenjaj as $key) {
      //print_r($key);
      $hash=md5($_GET['adminsifra']);
        if(strcmp($key['korisnickoime'],$_GET['adminime'])==0 && strcmp($key['sifra'],$hash)==0) //dodati uslov za sifru
        {
          //echo "s1";
           $_SESSION['username']=$key['korisnickoime'];
           $brojac=1;
        }
     }
     if($brojac==0)
     {
      echo '<div id="Prijava"><p id="Prijava">Neispravan password ili korisnicko ime, ponovite unos!</p></div>';
     }
}
}
function rest_post($request, $data) { }
function rest_delete($request) { }
function rest_put($request, $data) { }
function rest_error($request) { }

$method  = $_SERVER['REQUEST_METHOD'];
$request = $_SERVER['REQUEST_URI'];

switch($method) {
    case 'PUT':
        parse_str(file_get_contents('php://input'), $put_vars);
        zag(); $data = $put_vars; rest_put($request, $data); break;
    case 'POST':
        zag(); $data = $_POST; rest_post($request, $data); break;
    case 'GET':
        zag(); $data = $_GET; rest_get($request, $data); break;
    case 'DELETE':
        zag(); rest_delete($request); break;
    default:
        header("{$_SERVER['SERVER_PROTOCOL']} 404 Not Found");
        rest_error($request); break;
}
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
<script src="ValidacijaDodavanjaKomentara.js"></script>
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
     }, 3600);

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
    
<div id="GlavniDio">
<?php
include "FunkcijeNovosti.php";
?>
  <div id="Novosti">
     <?php
     include "DodavanjeNovosti.php";
     ?>
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
</div>
</body>
</html>

