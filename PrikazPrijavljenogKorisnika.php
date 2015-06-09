<?php
session_start();
?>
<?php 
$a = htmlEntities($_SESSION['username'], ENT_QUOTES);
echo 'Prijavljeni ste sa korisničkim imenom:'.$a.'<input type="submit"  id="OdjavaDugme" value="Odjava">';
?> 