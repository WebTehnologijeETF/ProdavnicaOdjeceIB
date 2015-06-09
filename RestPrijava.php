
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
   include "AdminPanel.php";
  echo '<div id="PonovnaPrijavaOdjel"><p id="PonovnaPrijava">Već ste se prijavili.</p></div>';
 
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
        if(strcmp($key['korisnickoime'],$_GET['adminime'])==0 && strcmp($key['sifra'],$hash)==0 && strcmp($key['tip'],'admin')==0) //dodati uslov za sifru
        {
        
           $_SESSION['username']=$key['korisnickoime'];
           include "AdminPanel.php";
           $brojac=1;

        }
     }
     if($brojac==0)
     {
       include "Administrator.html";
      echo '<div id="NeuspjesnaPrijava"><p id="NeispravnaPrijava">Neispravan password ili korisnicko ime, ponovite unos!</p></div>';

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
