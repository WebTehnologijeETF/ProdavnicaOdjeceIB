
<div id="DetaljnijeBody">
	<?php 
	include "FunkcijeNovosti.php"
	?>
<p class="DetaljnijeDatum">Datum:
	<?php
	$dat=$_REQUEST['txt'];
	datum($dat);
	?>
</p>
<p class="DetaljnijeNaslov">Naslov:</p>
<p class="DetaljnijeAutor">Autor:</p>
<p class="DetaljnijeSlika"><img src=""></p>
<p class="DetaljnijeOpis"> </p>
</div>