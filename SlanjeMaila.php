<?php 
header('Content-Type: text/html; charset=utf-8');
ini_set("SMTP","webmail.etf.unsa.ba");

ini_set("smtp_port","25");

ini_set('sendmail_from', 'ibrankovic1@etf.unsa.ba');

 
 $dodatneopcije="From:".$_POST['email']."\r\n";
 $dodatneopcije.="CC:"."agranulo1@etf.unsa.ba"."\r\n";
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

?>