<?php
session_start();
?>

<div id="DodavanjeProizvodaDio">
     <form action="OdjaviKorisnika.php" method="get">
  <p id="OdjavaDugmic">Prijavljeni ste sa korisničkim imenom:<?php 
        $a = htmlEntities($_SESSION['username'], ENT_QUOTES);
        echo $a;?>  <input type="submit"  id="OdjavaDugme" value="Odjava"></p>
</form>
	<p id="DodavanjeProizvodaDioPoruka">Unesite korisničko ime korisnika, kojeg želite izbrisati:</p>
	<form id="FormaProizvodi" onsubmit="return BrisanjeKorisnika(); return false;" action="BrisanjeKorisnikaBaza.php" method="get" name="BrisanjeKorisnika1">
<table id="TabelaProizvoda">
	<tr><td class="NemaBoje4">Korisničko ime korisnika:</td><td class="NemaBoje4"><input type="Text" name="korisnickoime"> </td><td class="NemaBoje4" id="GreskaIdKorisnika">Morate unijeti korisničko ime korisnika!</td></tr>
	<tr><td class="NemaBoje4"></td><td class="NemaBoje4" id="Poravnaj1"><input type="submit" value="Briši korisnika"></td></tr>
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
        $a1 = htmlEntities($key['korisnickoime'], ENT_QUOTES);
        $a2 = htmlEntities($key['email'], ENT_QUOTES);
        $a3 = htmlEntities($key['sifra'], ENT_QUOTES);
        //echo time();
        echo '<tr>'.'<td>'.$a1.'</td><td>'.$a2.'</td><td>'.$a3.'</td><td>'.$key['tip'].'</td></tr>';
     }
     echo "</table>";

?>
</div>
</div>