
<?php
session_start();
?>
<div id="DodavanjeProizvodaDio">
	 <form action="OdjaviKorisnika.php" method="get">
  <p id="OdjavaDugmic">Prijavljeni ste sa korisničkim imenom:<?php 
		$a = htmlEntities($_SESSION['username'], ENT_QUOTES);
		echo $a;?>  <input type="submit"  id="OdjavaDugme" value="Odjava"></p>
</form>
	<p id="DodavanjeProizvodaDioPoruka">Unesite podatke o novosti, koju želite unijeti:</p>
	<form id="FormaProizvodi" action="RestNovosti.php" onsubmit="return DodavanjeNovosti(); return false;" method="post" name="DodavanjeNovostiForma">
<table id="TabelaProizvoda">
	<tr><td class="NemaBoje4">Naslov:</td><td class="NemaBoje4"><input type="Text" id="NaslovNovostiDodavanje" name="naslov"> </td><td class="NemaBoje4" id="GreskaNaslov1">Morate unijeti naslov novosti!</td></tr>
	<tr><td class="NemaBoje4">Autor:</td><td class="NemaBoje4"><input type="Text" id="AutorNovostiDodavanje" name="autor"> </td ><td class="NemaBoje4" id="GreskaAutor1">Morate unijeti autora novosti!</td></tr>
	<tr><td class="NemaBoje4">Slika:</td><td class="NemaBoje4"><input type="Text" id="SlikaNovostiDodavanje" name="slika"> </td><td class="NemaBoje4" id="GreskaSlika1">Morate unijeti sliku novosti!</td></tr>
	<tr><td class="NemaBoje4">Sažetak:</td><td class="NemaBoje4"><input type="Text" id="SazetakNovostiDodavanje" name="sazetak"> </td><td class="NemaBoje4" id="GreskaSazetak1">Morate unijeti sažetak novosti!</td></tr>
	<tr><td class="NemaBoje4">Tekst novosti:</td><td class="NemaBoje4"><input type="Text" id="TekstNovostiDodavanje" name="tekst"> </td><td class="NemaBoje4" id="GreskaTekst1">Morate unijeti tekst novosti!</td></tr>
	<tr><td class="NemaBoje4"></td><td class="NemaBoje4" id="Poravnaj1"><input type="submit" value="Dodaj novost"></td></tr>
</table>
</form>
</div>