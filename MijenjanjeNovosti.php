<?php
session_start();
?>
<div id="DodavanjeProizvodaDio">
	 <form action="OdjaviKorisnika.php" method="get">
  <p id="OdjavaDugmic">Prijavljeni ste sa korisničkim imenom:<?php 
		$a = htmlEntities($_SESSION['username'], ENT_QUOTES);
		echo $a;?>  <input type="submit"  id="OdjavaDugme" value="Odjava"></p>
</form>
	<p id="DodavanjeProizvodaDioPoruka">Unesite podatke o novosti, koju želite mijenjati:</p>
	<form id="FormaProizvodi" action="MijenjanjeNovostiBaza.php" method="get" onsubmit="return MijenjanjeNovostiValidacija(); return false;" name="MijenjanjeNovostiForma">
<table id="TabelaProizvoda">
	<tr><td class="NemaBoje4">ID novosti:</td><td class="NemaBoje4"><input type="Text" id="NaslovNovostiDodavanje" name="id1"> </td><td id="GreskaMijenjanjeId">Morate unijeti id novosti!</td></tr>
	<tr><td class="NemaBoje4">Naslov:</td><td class="NemaBoje4"><input type="Text" id="NaslovNovostiDodavanje" name="naslov"> </td><td class="NemaBoje4"></td></tr>
	<tr><td class="NemaBoje4">Autor:</td><td class="NemaBoje4"><input type="Text" id="AutorNovostiDodavanje" name="autor"> </td ><td class="NemaBoje4"></td></tr>
	<tr><td class="NemaBoje4">Slika:</td><td class="NemaBoje4"><input type="Text" id="SlikaNovostiDodavanje" name="slika"> </td><td class="NemaBoje4"></td></tr>
	<tr><td class="NemaBoje4">Sažetak:</td><td class="NemaBoje4"><input type="Text" id="SazetakNovostiDodavanje" name="sazetak"> </td><td class="NemaBoje4"></td></tr>
	<tr><td class="NemaBoje4">Tekst novosti:</td><td class="NemaBoje4"><input type="Text" id="TekstNovostiDodavanje" name="tekst"> </td><td class="NemaBoje4"></td></tr>
	<tr><td class="NemaBoje4"></td><td class="NemaBoje4" id="Poravnaj1"><input type="submit" value="Dodaj novost"></td></tr>
</table>
</form>

<?php
   $veza = new PDO("mysql:dbname=prodavnicaodjeceibbaza;host=localhost;charset=utf8", "ilvana", "ilvana");
     $veza->exec("set names utf8");
     $mijenjaj=$veza->query("SELECT id,naslov,autor,sazetak,tekst FROM novost");
     echo '<table id="TabelaNovostiModifikacija"><tr><td>ID</td><td>Naslov</td><td>Autor</td><td>Sazetak</td><td>Tekst</td></tr>';
     foreach ($mijenjaj as $key) {
     	echo '<tr>'.'<td>'.$key['id'].'</td><td>'.$key['naslov'].'</td><td>'.$key['autor'].'</td><td>'.$key['sazetak'].'</td><td>'.$key['tekst'].'</td><td></tr>';
     }
     echo "</table>";
?>
</div>