<?php
     $id=$_GET['id'];

     include "SortiranjeKomentara.php";
 
     echo '<p class="NaslovSviKomentari">Komentari</p>';
     foreach ($listakomentara as $komentar) {
     	$mail=(string)$komentar['email'];
     	$mail1="'".str_replace(PHP_EOL, '<br/>', $mail)."'";
     	echo '<div id="IspisKomentara"><img class="SlikaKomentar1" src="https://cdn0.iconfinder.com/data/icons/Hand_Drawn_Web_Icon_Set/128/comment_edit.png"><p class="DatumKomentara">'.date('d.m.Y h:i:s',$komentar['datum1']).'</p><p class="TekstKomentara">'.$komentar['tekst'].'</p><p class="AutorKomentara">'.$komentar['autor'].'(<a class="KomentarMail" href="mailto:'.$komentar['email'].'">'.$komentar['email'].'</a>)</p></div>'.'<br>';
     }
?>