<?php
session_start();
?>

<div id="DodavanjeProizvodaDio">
  <form action="OdjaviKorisnika.php" method="get">
  <p id="OdjavaDugmic">Prijavljeni ste sa korisničkim imenom:<?php 
        $a = htmlEntities($_SESSION['username'], ENT_QUOTES);
        echo $a;?>  <input type="submit"  id="OdjavaDugme" value="Odjava"></p>
</form>
	<p id="DodavanjeProizvodaDioPoruka">Unesite id komentara, koji želite brisati:</p>
  <form id="FormaProizvodi" onsubmit="return BrisanjeKomentaraValidacija(); return false;" action="BrisanjeKomentaraBaza.php" method="get" name="BrisanjeKomentaraForma">
<table id="TabelaProizvoda">
	<tr><td class="NemaBoje4">ID komentara:</td><td class="NemaBoje4"><input type="Text" name="id1"> </td><td class="NemaBoje4" id="GreskaId1">Morate unijeti id komentara!</td></tr>
	<tr><td class="NemaBoje4"></td><td class="NemaBoje4" id="Poravnaj1"><input type="submit" value="Briši komentar"></td></tr>
</table><br><br>
  </form>
<div id="BrisanjeTabela2"></div>
<?php
$veza = new PDO("mysql:dbname=prodavnicaodjeceibbaza;host=localhost;charset=utf8", "ilvana", "ilvana");
     $veza->exec("set names utf8");
     $mijenjaj=$veza->query("SELECT id,tekst,korisnikstranice FROM komentar");
     echo '<table id="TabelaKomentaraBrisanje">';
     echo "<tr><td>ID</td><td>Autor</td><td>Tekst</td></tr>";
     foreach ($mijenjaj as $key) {
      $a1 = htmlEntities($key['id'], ENT_QUOTES);
      $a2=htmlentities($key['korisnikstranice'],ENT_QUOTES);
      $a3 = htmlEntities($key['tekst'], ENT_QUOTES);
      echo '<tr>'.'<td>'.$a1.'</td><td>'.$a2.'</td><td>'.$a3.'</td></tr>';
     }
     echo "</table>";
?>
</div>