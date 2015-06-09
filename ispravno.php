<div id="Ispravno">
<p class="IspravnoNaslov">Provjerite da li ste ispravno popunili kontakt formu: </p>
<form action="SlanjeMailaRest.php" method="post">
<p><br></p>
<p class="IspravnoOstalo">
	<?php 
	 $poruka="Ime:".$_POST['Ime']."\r\n";
	 $im=htmlEntities($_POST['Ime'], ENT_QUOTES);;
	 echo "Ime:".$im;
	 ?>
	</p>
	<p class="IspravnoOstalo">
	<?php 
	 $poruka.="Prezime:".$_POST['Prezime']."\r\n";
	 $pr=htmlEntities($_POST['Prezime'], ENT_QUOTES);
	 echo "Prezime:".$pr;
	 ?></p>
	<p class="IspravnoOstalo">
	<?php 
	 $da=htmlEntities($_POST['startdate1'], ENT_QUOTES);
	 echo "Datum rođenja:".$da;
	 ?></p> 
	 <p class="IspravnoOstalo">
	<?php 
	 $poruka.="Mjesto rođenja:".$_POST['Mjesto1'];
	 $mj=htmlEntities($_POST['Mjesto1'], ENT_QUOTES);
	 echo "Mjesto rođenja:".$mj;
	 ?></p>
	 <p class="IspravnoOstalo">
	<?php 
	$poruka.="Općina rođenja:".$_POST['Opcina1'];
	$op=htmlEntities($_POST['Opcina1'], ENT_QUOTES);
	 echo "Općina rođenja:".$op;
	 ?></p>
	 <p>
	 	<p class="IspravnoOstalo">
	<?php 
	$poruka.="Spol:".$_POST['zensko'];
	$sp=htmlEntities($_POST['zensko'], ENT_QUOTES);
	echo "Spol:".$sp;
	?></p>
	<p class="IspravnoOstalo">
	<?php 
	 $poruka.="Vaš email:".$_POST['email'];
	 $em=htmlEntities($_POST['email'], ENT_QUOTES);
	 echo "Vaš email:".$em;
	 ?></p>
	 <p class="IspravnoOstalo">
	<?php 
	 $poruka.="Ocjena stranice:".$_POST['Track'];
	 $po=htmlEntities($_POST['Track'], ENT_QUOTES);
	 echo "Ocjena stranice:".$po;
	 ?></p>
	 <p class="IspravnoOstalo">
	<?php 
	 if($_POST['Track']<50)
	 	$poruka.="Primjedba:".$_POST['Primjedbe'];
	    $por=htmlEntities($_POST['Primjedbe'], ENT_QUOTES);
	 	echo "Primjedba:".$por;
	 ?></p>
	 <p><br></p>


<p class="IspravnoNaslov">Da li ste sigurni da želite poslati ove podatke?</p>

<input id="IspravnoSalji" type="submit" name="posta" value="Siguran sam" class="RasiriButton"/>


<p class="IspravnoNaslov">Ako ste pogrešno popunili formu, možete ispod prepraviti unesene podatke:</p>
<?php
include 'kontakt.php'; 

?>
 </form>



</div>