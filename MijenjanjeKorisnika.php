<?php
session_start();
?>

<div id="DodavanjeProizvodaDio">
     <form action="OdjaviKorisnika.php" method="get">
  <p id="OdjavaDugmic">Prijavljeni ste sa korisničkim imenom:<?php 
    $a = htmlEntities($_SESSION['username'], ENT_QUOTES);
    echo $a;?>  <input type="submit"  id="OdjavaDugme" value="Odjava"></p>
</form>
	<p id="DodavanjeProizvodaDioPoruka">Unesite korisničko ime  korisnika, kojeg želite mijenjati i podatke koje želite da se izmijenje u odnosu na postojeće:</p>
	<form id="FormaProizvodi" name="MijenjanjeKorisnika" onsubmit="return ValidirajMijenjanjeKorisnika(); return false;" action="MijenjanjeKorisnikaBaza.php" method="get">
<table id="TabelaProizvoda">
	<tr><td class="NemaBoje4">Korisničko ime:</td><td class="NemaBoje4"><input type="Text" name="korisnickoime"> </td><td class="NemaBoje4" id="GreskaNemaId">Morate unijeti korisničko ime korisnika</td></tr>
	<tr><td class="NemaBoje4">Password:</td><td class="NemaBoje4"><input type="Text" name="password"> </td ><td class="NemaBoje4"></td></tr>
	<tr><td class="NemaBoje4">Email:</td><td class="NemaBoje4"><input type="email" name="email"> </td ><td class="NemaBoje4"></td></tr>
  <tr><td>Tip korisnika:</td><td><input type="radio" name="tip" value="obicni">Obični<br><input type="radio" name="tip" value="admin">Administrator</td></tr>
		<tr><td class="NemaBoje4"></td><td class="NemaBoje4" id="Poravnaj1"><input type="submit" value="Izmijeni korisnika"></td></tr>
</table>
</form>
<div id="KorisniciTabeleBrisanje">
<?php
   $veza = new PDO("mysql:dbname=prodavnicaodjeceibbaza;host=localhost;charset=utf8", "ilvana", "ilvana");
     $veza->exec("set names utf8");
     $mijenjaj=$veza->query("SELECT korisnickoime,email,sifra,tip FROM korisnik");
     echo '<table id="TabelaKorisniciBrisanje">';
      echo "<tr><td>Korisnicko ime</td><td>Email</td><td>Šifra</td><td>Tip</td></tr>";
     foreach ($mijenjaj as $key) {
     	echo '<tr>'.'<td>'.$key['korisnickoime'].'</td><td>'.$key['email'].'</td><td>'.$key['sifra'].'</td><td>'.$key['tip'].'</td></tr>';
     }
     echo "</table>";

?>
</div>
</div>