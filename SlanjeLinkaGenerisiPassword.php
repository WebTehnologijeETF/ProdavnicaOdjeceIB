<?php
ini_set("SMTP","webmail.etf.unsa.ba");

ini_set("smtp_port","25");

ini_set('sendmail_from', 'ibrankovic1@etf.unsa.ba');
$korisnickoime=$_GET['adminime1'];
$veza = new PDO("mysql:dbname=prodavnicaodjeceibbaza;host=localhost;charset=utf8", "ilvana", "ilvana");
$veza->exec("set names utf8");
$svikorisnici=$veza->query("SELECT korisnickoime,email,sifra FROM korisnik");
$mail="";
foreach ($svikorisnici as $key) {
	if(strcmp($key['korisnickoime'],$korisnickoime)==0)
		$mail=$key['email'];
}

mail($mail,"Novi password za korisnički račun web stranice Prodavnica odjeće IB",'<a href="#" onClick="SaljiMail('.$korisnickoime,time().')">Potvrdite da ste dobili mail</a>');
?>