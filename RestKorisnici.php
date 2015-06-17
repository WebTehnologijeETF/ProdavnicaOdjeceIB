<?php
session_start();
?>
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
<script src="PrikaziProizvodeAjax.js"></script>
<script src="ValidacijaKorisniciForme.js"></script>
<script src="ValidacijaBrisanjaKomentara.js"></script>
<script src="ValidacijaNovosti.js"></script>
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
function zag() {
    header("{$_SERVER['SERVER_PROTOCOL']} 200 OK");
    header('Content-Type: text/html');
    header('Access-Control-Allow-Origin: *');
}
function rest_get($request, $data) 
{
     $veza = new PDO("mysql:dbname=prodavnicaodjeceibbaza;host=localhost;charset=utf8", "ilvana", "ilvana");
     $veza->exec("set names utf8");
     $mijenjaj=$veza->query("SELECT korisnickoime,email,sifra FROM korisnik");
     echo '<table id="TabelaKorisniciBrisanje">';
      echo "<tr><td>Korisnicko ime</td><td>Email</td><td>Šifra</td></tr>";
     foreach ($mijenjaj as $key) {
        echo '<tr>'.'<td>'.$key['korisnickoime'].'</td><td>'.$key['email'].'</td><td>'.$key['sifra'].'</td></tr>';
     }
     echo "</table>";
}
function rest_post($request, $data) 
{ 
$email=$_POST['email'];
$korisnickoime=$_POST['korisnickoime'];
$password=$_POST['password'];
$tip=$_POST['tip'];
if($tip=="obicni")
    $tip1="obicni";
else
    $tip1="admin";
$veza = new PDO("mysql:dbname=prodavnicaodjeceibbaza;host=localhost;charset=utf8", "ilvana", "ilvana");
     $veza->exec("set names utf8");
 $dodaj=$veza->prepare('INSERT INTO korisnik (korisnickoime,sifra,email,tip) VALUES(:korisnickoime,:sifra,:email,:tip)');
 $dodaj->bindParam(":korisnickoime",$korisnickoime);
 $hash=md5($password);
 $dodaj->bindParam(":sifra",$hash);
 $dodaj->bindParam(":email",$email);
  $dodaj->bindParam(":tip",$tip1);
 $dodaj->execute();
 include "OperacijeKorisnici.php";
}
function rest_delete($request, $data) 
{
    echo "aaa";
$ime=$data['korisnickoime'];
$veza = new PDO("mysql:dbname=prodavnicaodjeceibbaza;host=localhost;charset=utf8", "ilvana", "ilvana");
$veza->exec("set names utf8");

if((strcmp($_SESSION['username'], $ime))==0)
{

}
else
{
$brisi=$veza->prepare("DELETE FROM korisnik where korisnickoime=:ime");
$brisi->bindParam(":ime",$ime);
$brisi->execute();
}
include "OperacijeKorisnici.php";
}

function rest_put($request, $data)
 {
$novokorisnickoime=$data['korisnickoime'];
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
if($data['korisnickoime']=="")
{
    $nemaid=1;
}

if($data['email']!="")
    $novimail=$data['email'];

if($data['password']!="")
    $novipassword=$data['password'];

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
}

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
        zag(); $data = $_REQUEST; rest_delete($request, $data); break;
    default:
        header("{$_SERVER['SERVER_PROTOCOL']} 404 Not Found");
        rest_error($request); break;
}
?>
</div>
</body>
</html>