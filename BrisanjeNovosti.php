<?php
session_start();
?>

<div id="DodavanjeProizvodaDio">
     <form action="OdjaviKorisnika.php" method="get">
  <p id="OdjavaDugmic">Prijavljeni ste sa korisničkim imenom:<?php 
        $a = htmlEntities($_SESSION['username'], ENT_QUOTES);
        echo $a;?>  <input type="submit"  id="OdjavaDugme" value="Odjava"></p>
</form>
	<p id="DodavanjeProizvodaDioPoruka">Unesite id novosti, koju želite brisati:</p>
	<form id="FormaProizvodi" action="BrisanjeNovostiRest.php" method="get" onsubmit="return BrisanjeNovostiValidacija(); return false;" name="BrisanjeNovostiForma">
<table id="TabelaProizvoda">
	<tr><td class="NemaBoje4">ID novosti:</td><td class="NemaBoje4"><input type="Text" id="NaslovNovostiDodavanje" name="id1"> </td><td class="NemaBoje4" id="GreskaIdNovost">Morate unijeti id novosti.</td></tr>
	<tr><td class="NemaBoje4"></td><td class="NemaBoje4" id="Poravnaj1"><input type="submit" value="Briši novost"></td></tr>
</table>
</form>
<?php
   $veza = new PDO("mysql:dbname=prodavnicaodjeceibbaza;host=localhost;charset=utf8", "ilvana", "ilvana");
     $veza->exec("set names utf8");
     $mijenjaj=$veza->query("SELECT id,naslov,autor,sazetak,tekst FROM novost");
     echo '<table id="TabelaNovostiModifikacija">';
     echo '<table id="TabelaNovostiModifikacija"><tr><td>ID</td><td>Naslov</td><td>Autor</td><td>Sazetak</td><td>Tekst</td></tr>';
     foreach ($mijenjaj as $key) {
     	echo '<tr>'.'<td>'.$key['id'].'</td><td>'.$key['naslov'].'</td><td>'.$key['autor'].'</td><td>'.$key['sazetak'].'</td><td>'.$key['tekst'].'</td><td></tr>';
     }
     echo "</table>";
?>


</div>