
	<?php
function zag() {
    header("{$_SERVER['SERVER_PROTOCOL']} 200 OK");
    header('Content-Type: text/html');
    header('Access-Control-Allow-Origin: *');
}
function rest_get($request, $data) { }
function rest_post($request, $data) 
{ 
	header('Content-Type: text/html; charset=utf-8');
ini_set("SMTP","webmail.etf.unsa.ba");

ini_set("smtp_port","25");

ini_set('sendmail_from', 'ibrankovic1@etf.unsa.ba');

 
 $dodatneopcije="From:".$_POST['email']."\r\n";
 $dodatneopcije.="CC:"."iprazina1@etf.unsa.ba"."\r\n";
 $dodatneopcije.="Reply-To".$_POST['email']."\r\n";
 $dodatneopcije.="Content-Type:text/plain;\r\n charset=utf-8";

 $primaoc='ibrankovic1@etf.unsa.ba';
 $tema='Žalba/Pohvala web stranice ProdavnicaOdjeceIB';
 $poruka="Ime:".$_POST['Ime']."\r\n";
 $poruka.="Prezime:".$_POST['Prezime']."\r\n";
 $poruka.="Datum:".$_POST['startdate1']."\r\n";
 $poruka.="Mjesto:".$_POST['Mjesto1']."\r\n";
 $poruka.="Opcina:".$_POST['Opcina1']."\r\n";
 $poruka.="Spol:".$_POST['zensko']."\r\n";
 $poruka.="Ocjena:".$_POST['Track']."\r\n";
$poruka.="Opcina:".$_POST['Primjedbe'];


 //mail($primaoc,$tema,$poruka,'From:ibrankovic1@etf.unsa.ba'.'\r\n'.'CC:ibrankovic1@etf.unsa.ba');
 mail($primaoc,$tema,$poruka,$dodatneopcije);

 echo "Zahvaljujemo što ste nas kontaktirali.";

}
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
