
<form action="OdjaviObicnogKorisnika.php" method="get">
  <p id="POdjava">Prijavljeni ste sa korisničkim imenom:<?php 
    $a = htmlEntities($_SESSION['username'], ENT_QUOTES);
    echo $a;?>  <input type="submit"  id="OdjavaDugme" value="Odjava"></p>