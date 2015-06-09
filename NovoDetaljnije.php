<?php
     $id=$_GET['txt'];
	 $veza = new PDO("mysql:dbname=prodavnicaodjeceibbaza;host=localhost;charset=utf8", "ilvana", "ilvana");
     $veza->exec("set names utf8");
     $novosti=$veza->query("select id, naslov,slika,autor,UNIX_TIMESTAMP(datum) datum1,tekst from novost where id=".$id);

	foreach ($novosti as $novost) {
	print $novost['tekst']."<br>";
    } 
	echo '<p id="Komentar1"><a href="#" class="KomentarMail1" onClick="SakrijDetaljnije('.$id.');">Sakrij detaljnije</a></p>';
?>
