<div id="Novost1" class="OkvirNovosti">
		<p class="NovostiSlika"><img  class="SlikaNovosti" alt="" src=<?php 
		slika($dat);?>></p>
		<p class="datum"><?php datum($dat);?></p>
		<p class="NaslovNovosti"><b><?php naslov($dat);?>	
		</b></p>
	<p class="TekstNovosti"><?php tekstnovostiukratko($dat)?></p>
	<p class="LinkNovosti"><?php link1($dat,$html) ?></p>
	<p class="autor1"> Autor:<?php autor($dat);?></p>
	</div>