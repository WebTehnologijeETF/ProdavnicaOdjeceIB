<?php
include "FunkcijaIspisPrethodnihVrijednosti.php";
include "FunkcijaIspisSlike.php"
?>

<div onLoad="Radi()">
<img  class="SlikaGoogle" alt="" src="http://www.ordoh.com/wp-content/uploads/2014/11/google-chrome-tutorial-mac.jpg">
<div id="KontaktForma">

	<p class="UvodKontaktForma">Ukoliko želite kontaktirati vlasnika ove web stranice, potrebno je da unesete neke od Vaših osnovnih ličnih podataka, te da ocijenite, koliko ste Vi zadovoljni ovom web stranicom, usput možete napisati neku pohvalu ili kritiku:
     
	<form   action="Obrada.php" method="post"  name="Forma">
	<table id="TabelaForme">

   
        <tr>
        	<td class="NemaBoje">Ime:</td>
        	<td class="NemaBoje" id="FormaIme"><input class="Prosiri" type="text" name="Ime" placeholder="Ilvana" 
        		value="<?php 
		                IspisPrethodnoUnesenihVrijednosti("Ime");
                        ?>"></td>
        	<td class="NemaBoje" id="ImeGreska"><img class="Upozorenje" alt="" src="https://cdn3.iconfinder.com/data/icons/freeapplication/png/24x24/Danger.png"> Niste unijeli Vaše ime ili ste unijeli broj,što je nevalidno! 
        		<?php 
        		 if($vrijednostime==1)
			     IspisSlike();
			 ?>
        		</td>
        </tr>

		<tr>
			<td class="NemaBoje">Prezime:</td><td id="FormaPrezime" class="NemaBoje"><input class="Prosiri" type="text" name="Prezime" placeholder="Branković" value="<?php 
		                                            IspisPrethodnoUnesenihVrijednosti("Prezime"); 
													?>"></td>
			<td id="PrezimeGreska" class="NemaBoje"><img alt="" class="Upozorenje" src="https://cdn3.iconfinder.com/data/icons/freeapplication/png/24x24/Danger.png"> Niste unijeli Vaše prezime ili ste unijeli broj, što nije validno!
             <?php 
        		 if($vrijednostprezime==1)
        		 	IspisSlike();
			  ?>
        	
			</td>
		</tr>

		<tr>
			<td class="NemaBoje">Datum rođenja:</td>
			<td class="NemaBoje"><input class="Prosiri" id="startdate" name="startdate1" min="1920-01-01" max="2008-01-01" type="date" value="<?php 
						IspisPrethodnoUnesenihVrijednosti("startdate1");
						?>"></td>
					<td class="NemaBoje">
						<?php 
						if($vrijednostdatum==1)
			            IspisSlike(); 
			        ?>
					</td>

		</tr>
		<tr>
			<td class="NemaBoje">Mjesto rođenja:</td>
			<td class="NemaBoje"><input class="Prosiri" type="text" id="Mjesto" name="Mjesto1" value="<?php 
		IspisPrethodnoUnesenihVrijednosti("Mjesto1"); 
           ?>"></td>
			<td   class="NemaBoje" id="SlikaMjesto"><img class="Upozorenje" alt="" src="https://cdn3.iconfinder.com/data/icons/freeapplication/png/24x24/Danger.png"></td>
			<td class="NemaBoje" id="GreskaMjesto"></td>
		</tr>

		<tr>
			<td class="NemaBoje">Općina rođenja:</td>
			<td  class="NemaBoje"><input class="Prosiri" type="text" id="Opcina" name="Opcina1" value="<?php 
		    IspisPrethodnoUnesenihVrijednosti("Opcina1");
			?>"></td>
			<td   class="NemaBoje" id="SlikaOpcina"><img class="Upozorenje" alt="" src="https://cdn3.iconfinder.com/data/icons/freeapplication/png/24x24/Danger.png"></td>
			<td class="NemaBoje" id="GreskaOpcina"></td>
		</tr>

		<tr>
			<td class="NemaBoje">Spol:</td>
			<td id="FormaRadio" class="NemaBoje"><input  class="Zensko" type="radio" name="zensko" 
				<?php if(isset($_REQUEST['zensko']) && $_REQUEST['zensko']=="Zensko")
				echo 'checked="checked"';?>value="Zensko">Žensko<input class="Musko" type="radio" name="zensko" <?php if(isset($_REQUEST['zensko']) && $_REQUEST['zensko']=="Musko")echo 'checked="checked"';?>value="Musko">Muško</td>
		<td class="NemaBoje">
			<td class="NemaBoje">
				<?php
				if($vrijednostradio==1)
			 IspisSlike(); ?>
			</td>
				
		</td>
		</tr>

		<tr>
			<td class="NemaBoje">Vaš e-mail:</td>
			<td class="NemaBoje" id="FormaMail" ><input class="Prosiri" type="email" name="email" id="e-mail" placeholder="mail@example.com" value="<?php 
		IspisPrethodnoUnesenihVrijednosti("email");
			?>"></td><td class="NemaBoje"  id="GreskaEmail"><img alt="" class="Upozorenje" src="https://cdn3.iconfinder.com/data/icons/freeapplication/png/24x24/Danger.png"> Niste unijeli mail ili niste unijeli ispravan mail!
         <?php 
        		 if($vrijednostemail==1)
			     IspisSlike(); ?>
        		
		</td>
		</tr>
		<tr>
			<td class="NemaBoje">Ocjena naše web-stranice:</td>
			<td class="NemaBoje"><input class="Prosiri" name="Track" id="skill" type="range" min="1" max="100" value="<?php 
		     IspisPrethodnoUnesenihVrijednosti("Track");
			?>"></td>
		</tr>
		<tr>
			<td class="NemaBoje">Primjedba ili pohvala:</td>
			<td id="FormaPrimjedbe" class="NemaBoje"><input class="Prosiri" id="Primjedbe" type="text" name="Primjedbe"></td>
			<td id="PrimjedbaGreska" class="NemaBoje" value="<?php 
		IspisPrethodnoUnesenihVrijednosti("Primjedbe");
         ?>"><img  alt="" class="Upozorenje" src="https://cdn3.iconfinder.com/data/icons/freeapplication/png/24x24/Danger.png"> Morate unijeti primjedbu, jer niste zadovoljni sa izgledom naše web stranice!
     <?php 
        		 if($vrijednostprimjedba==1)
			     IspisSlike();
	 ?>
        		
     </td>
		</tr>
		<tr>
			<td class="NemaBoje"></td>
			<td  class="NemaBoje" id="Button"><input type="submit"  value="Pošalji" class="RasiriButton"/></td>
			<td class="NemaBoje"><input type="Button"  value="Reset" onclick="IzbrisiSve()" class="RasiriButton"/></td>
		</tr>
	</table>
	
	</form>	
</div>
</div>