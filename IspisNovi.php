
<?php
     $id=$_GET['id'];
     include "SortiranjeKomentara.php";

     foreach ($listakomentara as $komentar) {  
       $svikorisnici1=$veza1->prepare('select korisnickoime,email from korisnik where korisnickoime=:korisnik');
       $svikorisnici1->bindParam(":korisnik",$komentar['korisnikstranice']);
       $svikorisnici1->execute();
       foreach ($svikorisnici1 as $key1) {
     	$mail=(string)$key1['email'];
     	$mail1="'".str_replace(PHP_EOL, '<br/>', $mail)."'";
     		echo '<div id="NoviKomentari"><p ">'.date('d.m.Y h:i:s',$komentar['datum1']).'</p><br><p id="KNovi">'.$komentar['tekst'].'</p><p id="ANovi">'.$komentar['korisnikstranice'].'<br>'.'(<a class="KomentarMail" href="mailto:'.$key1['email'].'">'.$key1['email'].'</a>)</p></div>'.'<br>';
     }
 }
?>