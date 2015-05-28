<div id="Novost1" class="OkvirNovosti">
	    <p><img class="SlikaKomentar" src="https://cdn0.iconfinder.com/data/icons/Hand_Drawn_Web_Icon_Set/32/comment.png">
           <?php
           
            $brojkomentara=$veza->prepare('select count(*) broj from komentar where novost=:novost');
            $brojkomentara->bindParam("novost",$novost['id']);
            $brojkomentara->execute();

              foreach ($brojkomentara as $komenatar) {
              	$ispisibroj=$komenatar['broj'];
              }
	    	echo '<a class="BrojKomentara" onclick="OtvaranjeKomentara('.$novost['id'].'); return false;" href="#">'.$ispisibroj.'</a>';
	    	?>
		<poravnaj><img  class="SlikaNovosti" alt="" align="right" src=<?php echo $novost['slika'];?>></poravnaj></p>
		<p class="datum"><?php echo date('d.m.Y h:i:s',$novost['datum1']);?></p>
		<p class="NaslovNovosti"><b><?php echo $novost['naslov'];?>	
		</b></p>
	<p class="TekstNovosti"><?php echo $novost['sazetak']; ?></p>
	<p class="LinkNovosti"><?php 
	if(empty($novost['tekst'])==true)
	{
       echo '<a href="#" onclick="OtvaranjeDetaljnije('.$novost['id'].'); return false; ">Detaljnije</a>';
	}
	?></p>
	<p class="autor1"> Autor:<?php echo $novost['autor'];?></p>
	</div>