<?php
     $id=$_GET['id'];

     include "SortiranjeKomentara.php";
 
     echo '<p class="NaslovSviKomentari">Komentari</p>';
     foreach ($listakomentara as $komentar) {  
       $svikorisnici1=$veza1->prepare('select korisnickoime,email from korisnik where korisnickoime=:korisnik');
       $svikorisnici1->bindParam(":korisnik",$komentar['korisnikstranice']);
       $svikorisnici1->execute();
       foreach ($svikorisnici1 as $key1) {
     	$mail=(string)$key1['email'];
     	$mail1="'".str_replace(PHP_EOL, '<br/>', $mail)."'";
     	echo '<div id="IspisKomentara"><img class="SlikaKomentar1" src="https://cdn0.iconfinder.com/data/icons/Hand_Drawn_Web_Icon_Set/128/comment_edit.png"><p class="DatumKomentara">'.date('d.m.Y h:i:s',$komentar['datum1']).'</p><p class="TekstKomentara">'.$komentar['tekst'].'</p><p class="AutorKomentara">'.$key1['korisnickoime'].'(<a class="KomentarMail" href="mailto:'.$key1['email'].'">'.$key1['email'].'</a>)</p></div>'.'<br>';
     }
 }
?>