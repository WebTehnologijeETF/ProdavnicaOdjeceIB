
<div id="DetaljnijeBody">
	<?php 
	include "FunkcijeNovosti.php"
	?>
<p class="DetaljnijeDatum">Datum:
	<?php
	$dat=$_GET['txt'];
	$dat1="novosti/".$dat.".txt";
	$dat2=file($dat1);
	datum($dat2);
	?>
</p>
<p class="DetaljnijeNaslov">
<?php
	$dat=$_GET['txt'];
	$dat1="novosti/".$dat.".txt";
	$dat2=file($dat1);
	naslov($dat2);
	?></p>
<p class="DetaljnijeAutor">Autor:
<?php
	$dat=$_GET['txt'];
	$dat1="novosti/".$dat.".txt";
	$dat2=file($dat1);
	autor($dat2);
	?></p>
<p ><img class="DetaljnijeSlika" src=<?php
	$dat=$_GET['txt'];
	$dat1="novosti/".$dat.".txt";
	$dat2=file($dat1);
	slika($dat2);
	?>></p>
<p class="DetaljnijeOpis"> <?php
	$dat=$_GET['txt'];
	$dat1="novosti/".$dat.".txt";
	$dat2=file($dat1);
	tekstnovosti($dat2);
	?></p>
</div>