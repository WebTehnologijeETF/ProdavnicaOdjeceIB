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
  echo "string";
   $veza = new PDO("mysql:dbname=prodavnicaodjeceibbaza;host=localhost;charset=utf8", "ilvana", "ilvana");
     $veza->exec("set names utf8");
     $mijenjaj=$veza->query("SELECT id,autor,tekst  FROM komentar");
     echo '<table id="TabelaKomentaraBrisanje">';
     echo "<tr><td>ID</td><td>Autor</td><td>Tekst</td></tr>";
     foreach ($mijenjaj as $key) {
      $a1 = htmlEntities($key['id'], ENT_QUOTES);
      $a2 = htmlEntities($key['autor'], ENT_QUOTES);
      $a3 = htmlEntities($key['tekst'], ENT_QUOTES);
      echo '<tr>'.'<td>'.$a1.'</td><td>'.$a2.'</td><td>'.$a3.'</td></tr>';
     }
     echo "</table>";
}
function rest_post($request, $data) 
{
$id1=$_POST['id'];
$ime=$_POST['AutorKomentara1'];
$tekst1=$_POST['komentar'];
$email1=$_POST['EmailKomentara1'];

$veza = new PDO("mysql:dbname=prodavnicaodjeceibbaza;host=localhost;charset=utf8", "ilvana", "ilvana");
     $veza->exec("set names utf8");

$prep=$veza->prepare('INSERT INTO komentar(novost, autor, tekst, email,vrijeme) VALUES(:novost,:autor,:tekst,:email,CURRENT_TIMESTAMP)');

$prep->bindParam(":novost",$id1);
$prep->bindParam(":autor",$ime);
$prep->bindParam(":tekst",$tekst1);
$prep->bindParam(":email",$email1);
if($tekst1!="")
$prep->execute();

include "IspisNovi.php";
 }
function rest_delete($request,$data) 
{
$id1=$data['id'];

$veza = new PDO("mysql:dbname=prodavnicaodjeceibbaza;host=localhost;charset=utf8", "ilvana", "ilvana");
$veza->exec("set names utf8");
$brisi=$veza->prepare("DELETE FROM komentar where id=:id");
$brisi->bindParam(":id",$id1);
$brisi->execute();
include "AdminPanel.php"; 
}
function rest_put($request, $data) { 
}
function rest_error($request) { 

}

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