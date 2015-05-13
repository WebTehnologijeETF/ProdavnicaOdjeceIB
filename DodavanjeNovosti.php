<?php
//header('Content-Type: text/html; charset=utf-8');
$svitxt=glob("novosti/*.txt");
foreach ($svitxt as $key) {
	$dat=$key;
	$html="novakolekcija.html";
	include "DodajDioKodNovosti.php";
}
?>