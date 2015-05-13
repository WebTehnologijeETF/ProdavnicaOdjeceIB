<?php 
 
ini_set("SMTP","webmail.etf.unsa.ba");

ini_set("smtp_port","25");

ini_set('sendmail_from', 'ibrankovic1@etf.unsa.ba');

 $dodatneopcije="From:"."ibrankovic1@etf.unsa.ba"."\r\n";
 $dodatneopcije.="CC:"."agranulo1@etf.unsa.ba"."\r\n";
 $dodatneopcije.="Content-Type:text/plain;\r\n charset=utf-8";

 $primaoc='ibrankovic1@etf.unsa.ba';
 $tema='Žalba/Pohvala web stranice ProdavnicaOdjeceIB';
 $poruka="Lijep dan";

 mail($primaoc,$tema,$poruka,'From:ibrankovic1@etf.unsa.ba'.'\r\n'.'CC:ibrankovic1@etf.unsa.ba');
 //mail($primaoc,$tema,$poruka,$dodatneopcije);

 echo "Zahvaljujemo što nas kontaktirali.";

?>