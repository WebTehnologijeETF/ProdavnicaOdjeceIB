<?php
$korisnickoime=$_GET['korisnickoime'];
$vrijeme=$_GET['vrijeme'];
function GenesiriPassword() {
	//echo "string";
    $karakteri = '0123456789abcdefghijklmnoprstuvzABCDEFGHIJKLMNOPRSTUVZ';
    $duzina = strlen($karakteri);
    $string = '';
    for ($i = 0; $i < 6; $i++) {
        $string .= $karakteri[rand(0, $duzina - 1)];
    }

    return $string;
}
$novokorisnickoime=$_GET['korisnickoime'];
$novipassword="";
$nemaid=0;
$veza = new PDO("mysql:dbname=prodavnicaodjeceibbaza;host=localhost;charset=utf8", "ilvana", "ilvana");
$veza->exec("set names utf8");
$svikorisnici=$veza->query("SELECT korisnickoime,email,sifra FROM korisnik");
$mail="";
foreach ($svikorisnici as $key) {
	if(strcmp($key['korisnickoime'],$novokorisnickoime)==0)
		$mail=$key['email'];
}
if($_GET['korisnickoime']=="")
{
	$nemaid=1;
}

if($nemaid==0)
{
$mijenjaj=$veza->prepare("UPDATE korisnik SET sifra=:sifra WHERE korisnickoime=:korisnickoime");

$novi=GenesiriPassword();
echo "Novi password(mozda mail ne stigne xD):".$novi;
$hash=md5($novi);
$mijenjaj->bindParam(":sifra",$hash);
$mijenjaj->bindParam(":korisnickoime",$novokorisnickoime);
$mijenjaj->execute();
}

ini_set("SMTP","webmail.etf.unsa.ba");

ini_set("smtp_port","25");

ini_set('sendmail_from', 'ibrankovic1@etf.unsa.ba');
$sada=time();
if($sada-$vrijeme<=(24*60*60))
mail($mail,"Novi password za korisnički račun web stranice Prodavnica odjeće IB","Vaš novi password je:".$novi);

?>
