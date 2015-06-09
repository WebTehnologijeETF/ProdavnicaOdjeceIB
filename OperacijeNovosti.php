<?php
session_start();
?>
<div id="AdministratorDio">

<form action="OdjaviKorisnika.php" method="get">
	<p id="OdjavaDugmic">Prijavljeni ste sa korisničkim imenom:<?php 
		$a = htmlEntities($_SESSION['username'], ENT_QUOTES);
		echo $a;?>  <input type="submit"  id="OdjavaDugme" value="Odjava"></p>
</form>

<table id="TabelaAdmin">
	<tr><td class="NemaBoje2"><input class="Prosiri2" type="Button" height="30" value="Dodavanje novosti" onclick="DodavanjeNovostiAjax()"></td></tr>
	<tr>
		<td class="NemaBoje2"><input class="Prosiri2" type="Button" value="Brisanje novosti" onClick="BrisanjeNovostiAjax()"></td>
	</tr>
	<tr>
		<td class="NemaBoje2"><input class="Prosiri2" type="Button" value="Modifikovanje novosti" onclick="MijenjanjeNovostiAjax()"></td>
	</tr>
</table>
</div>