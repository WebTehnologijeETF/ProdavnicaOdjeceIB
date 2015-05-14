<?php
header('Content-Type: text/html; charset=utf-8');
$svitxt=glob("novosti/*.txt");
//sortiranje 
include "SortiranjeNovosti.php";

foreach ($sviucitanitxt as $key) {
	$dat=$key;
	$html="novakolekcija.html";
	include "DodajDioKodNovosti.php";
}
?>