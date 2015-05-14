<?php

$sviucitanitxt=array();
foreach ($svitxt as $key) {
	array_push($sviucitanitxt, file($key));
}

$listadatuma=array();
foreach ($sviucitanitxt as $key) {
	$trimovan=trim($key[0],"\n");
	$key1=explode(" ", $key[0]);
	$datum=explode(".", $key1[0]);
	$vrijeme=explode(":",$key1[1]);
	$spojendatumvrijeme=$datum[2].$datum[1].$datum[0].$vrijeme[0].$vrijeme[1].$vrijeme[2];
	//$time = strtotime($trimovan);;
    //$newformat = date('d.m.Y h:m:s',$time);
	array_push($listadatuma,$spojendatumvrijeme);
}

array_multisort($listadatuma,SORT_DESC,$sviucitanitxt);

?>