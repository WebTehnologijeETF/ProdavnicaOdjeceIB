
<div id="DetaljnijeBody">
	<?php 
	include "FunkcijeNovosti.php"
	?>
	
<p class="DetaljnijeDatum">Datum:
	<?php

	$id=$_GET['txt'];
	$veza = new PDO("mysql:dbname=prodavnicaodjeceibbaza;host=localhost;charset=utf8", "ilvana", "ilvana");
     $veza->exec("set names utf8");
     $novosti=$veza->query("select id, naslov,slika,autor,UNIX_TIMESTAMP(datum) datum1,sazetak from novost where id=".$id);

	foreach ($novosti as $novost) {
	print date('d.m.Y h:i:s',$novost['datum1']);
}

	?>
</p>
<p class="DetaljnijeNaslov">
<?php
	$id=$_GET['txt'];
	$veza = new PDO("mysql:dbname=prodavnicaodjeceibbaza;host=localhost;charset=utf8", "ilvana", "ilvana");
     $veza->exec("set names utf8");
     $novosti=$veza->query("select id, naslov,slika,autor,UNIX_TIMESTAMP(datum) datum1,sazetak from novost where id=".$id);

	foreach ($novosti as $novost) {
	print $novost['naslov'];
}

	?></p>
<p class="DetaljnijeAutor">Autor:
<?php
	
	$id=$_GET['txt'];
	$veza = new PDO("mysql:dbname=prodavnicaodjeceibbaza;host=localhost;charset=utf8", "ilvana", "ilvana");
     $veza->exec("set names utf8");
     $novosti=$veza->query("select id, naslov,slika,autor,UNIX_TIMESTAMP(datum) datum1 from novost where id=".$id);

	foreach ($novosti as $novost) {
	print $novost['autor'];
}

	?></p>
<p ><img class="DetaljnijeSlika" src=<?php
	
	$id=$_GET['txt'];
	$veza = new PDO("mysql:dbname=prodavnicaodjeceibbaza;host=localhost;charset=utf8", "ilvana", "ilvana");
     $veza->exec("set names utf8");
     $novosti=$veza->query("select id, naslov,slika,autor,UNIX_TIMESTAMP(datum) datum1,sazetak from novost where id=".$id);

	foreach ($novosti as $novost) {
	print $novost['slika'];
}

	?>></p>
<p class="DetaljnijeOpis"> <?php
	
	$id=$_GET['txt'];
	$veza = new PDO("mysql:dbname=prodavnicaodjeceibbaza;host=localhost;charset=utf8", "ilvana", "ilvana");
     $veza->exec("set names utf8");
     $novosti=$veza->query("select id, naslov,slika,autor,UNIX_TIMESTAMP(datum) datum1,tekst from novost where id=".$id);

	foreach ($novosti as $novost) {
	print $novost['tekst'];
}

	?></p>
</div>