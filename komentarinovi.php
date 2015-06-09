<div id="KomentariNoviRasiri">
<?php
header('Content-Type: text/html; charset=utf-8');
  include "IspisNovi.php";
?>
<form action="DodajKomentar.php" method="post"; name="FormaDodavanjeKomentara" onsubmit="return ValidirajDodavanjeKomentara(); return false;">
<div id="NoviKomentari1">
	<table>
		<tr>
			<td>Unesite Vaš komentar:</td>
			<td><input class="DodajKomentar1" type="text" name="komentar"></td><td id="GreskaKomentar">Morate unijeti komentar!</td>
		</tr>	
		<tr>
			<td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
			<td class="PoravnajKomenatarisiButton"><input class="RasiriButtonZaDodavanjeKomentara" type="submit" value="Komentariši" name="DodavanjeKomentara"></td>
		</tr>
	</table>
	<?php
	echo '<p id="Komentar1"><a href="#" class="KomentarMail1" onClick="SakrijDetaljnije1('.$id.');">Sakrij detaljnije</a></p>';
	?>
</form>
</div>