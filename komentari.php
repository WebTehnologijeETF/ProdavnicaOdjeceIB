<div id="KomentarDio">
<div id="DetaljnijeBody">
	<?php 
	include "FunkcijeNovosti.php"
	?>

<?php
header('Content-Type: text/html; charset=utf-8');
  include "IspisSvihKomentara.php";
?>
<form action="RestKomentari.php" method="post"; name="FormaDodavanjeKomentara" onsubmit="return ValidirajDodavanjeKomentara(); return false;">
<div id="DodavanjeKomentara">
	<table id="TabelaDodavanjaKomentara">
		<tr>
			<td>Unesite Vaše ime:</td>
			<td><input type="text" name="AutorKomentara1" id="AutorKomentara1"></td>
		</tr>
		<tr>
			<td>Unesite Vaš email:</td>
            <td><input type="email" name="EmailKomentara1" id="EmailKomentara1"></td> 
		</tr>
		<tr>
			<td>Unesite Vaš komentar:</td>
			<td><input class="DodajKomentar" type="text" name="komentar"></td><td id="GreskaKomentar">Morate unijeti komentar!</td>
		</tr>	
		<tr>
			<td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
			<td class="PoravnajKomenatarisiButton"><input class="RasiriButtonZaDodavanjeKomentara" type="submit" value="Komentariši" name="DodavanjeKomentara"></td>
		</tr>
	</table>
</div>
</form>
</div>