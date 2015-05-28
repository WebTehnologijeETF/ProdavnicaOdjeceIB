<?php

$veza1 = new PDO("mysql:dbname=prodavnicaodjeceibbaza;host=localhost;charset=utf8", "ilvana", "ilvana");
     $veza1->exec("set names utf8");
     
     $svikomentari1=$veza1->prepare('select UNIX_TIMESTAMP(vrijeme) datum1,tekst,autor,email from komentar where novost=:novost'); 
     $svikomentari1->bindParam(":novost",$id);
     $svikomentari1->execute();

$listakomentara=array();
     foreach ($svikomentari1 as $key) {
         array_push($listakomentara, $key);
     }
      $listadatuma=array();
     foreach ($listakomentara as $komentar) 
     { 
        $datum1=date('d.m.Y h:i:s',$komentar['datum1']);
        $key1=explode(" ",$datum1);
        $datum=explode(".",$key1[0]);
        $vrijeme=explode(":",$key1[1]);
        $spojendatumvrijeme=$datum[2].$datum[1].$datum[0].$vrijeme[0].$vrijeme[1].$vrijeme[2];
        array_push($listadatuma,$spojendatumvrijeme);
      }
      array_multisort($listadatuma,SORT_DESC,$listakomentara);

?>