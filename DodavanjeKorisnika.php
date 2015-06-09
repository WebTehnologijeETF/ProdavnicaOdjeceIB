<?php
session_start();
?>
<div id="DodavanjeProizvodaDio">
	 <form action="OdjaviKorisnika.php" method="get">
  <p id="OdjavaDugmic">Prijavljeni ste sa korisničkim imenom:<?php 
		$a = htmlEntities($_SESSION['username'], ENT_QUOTES);
		echo $a;?>  <input type="submit"  id="OdjavaDugme" value="Odjava"></p>
</form>
	<p id="DodavanjeProizvodaDioPoruka">Unesite podatke o korisniku, koji želite dodati:</p>
	<form id="FormaProizvodi" onsubmit=" return ValidirajDodavanjeKorisnika(); return false;" action="RestKorisnici.php" method="post" name="DodavanjeKorisnika">
<table id="TabelaProizvoda">
	<tr><td class="NemaBoje4">Korisničko ime:</td><td class="NemaBoje4"><input type="Text"  name="korisnickoime"> </td><td class="NemaBoje4" id="GreskaKorisnickoIme" >Morate unijeti korisničko ime!</td></tr>
	<tr><td class="NemaBoje4">Password:</td><td class="NemaBoje4"><input type="Text" name="password"> </td ><td class="NemaBoje4" id="GreskaPassword">Morate unijeti password!</td></tr>
	<tr><td class="NemaBoje4">Email:</td><td class="NemaBoje4"><input type="email"  name="email"> </td ><td class="NemaBoje4" id="GreskaEmail">Morate unijeti Vaš email!</td></tr>
	<tr><td>Tip korisnika:</td><td><input type="radio" name="tip" value="obicni">Obični<br><input type="radio" name="tip" value="admin">Administrator</td></tr>
		<tr><td class="NemaBoje4"></td><td class="NemaBoje4" id="Poravnaj1"><input type="submit" value="Dodaj korisnika"></td></tr>
</table>
</form>
</div>