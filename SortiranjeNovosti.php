<?php
header('Content-Type: text/html; charset=utf-8');
$veza = new PDO("mysql:dbname=prodavnicaodjeceibbaza;host=localhost;charset=utf8", "ilvana", "ilvana");
     $veza->exec("set names utf8");
     $svenovosti=$veza->query("select id, naslov,slika,autor,UNIX_TIMESTAMP(datum) datum1,sazetak from novost");
     
      if(!$svenovosti)
     {
        $greska=$veza->errorInfo();
        print "SQL greška: ".$greska[2];
     }
     
     $listanovosti=array();
     foreach ($svenovosti as $key) {
         array_push($listanovosti, $key);
     }
      $listadatuma=array();
     foreach ($listanovosti as $novost) 
     { 
        $datum=date('d.m.Y h:i:s',$novost['datum1']);
     	$key1=explode(" ",$datum);
     	$datum=explode(".",$key1[0]);
     	$vrijeme=explode(":",$key1[1]);
     	$spojendatumvrijeme=$datum[2].$datum[1].$datum[0].$vrijeme[0].$vrijeme[1].$vrijeme[2];
     	array_push($listadatuma,$spojendatumvrijeme);
      }
      array_multisort($listadatuma,SORT_DESC,$listanovosti);
?>