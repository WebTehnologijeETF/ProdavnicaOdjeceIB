<?php
//header('Content-Type: text/html; charset=utf-8');
$svitxt=glob("novosti/*.txt");
//sortiranje 
$sviucitanitxt=array();
foreach ($svitxt as $key) {
	array_push($sviucitanitxt, file($key));
}

foreach ($sviucitanitxt as $key {
	=explode(" ", $key[1]);
}
foreach ($svitxt as $key) {
	$dat=$key;
	$html="novakolekcija.html";
	include "DodajDioKodNovosti.php";
}
?>