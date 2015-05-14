<?php
function IspisPrethodnoUnesenihVrijednosti($prethodnavrijednost)
{
	if (isset($_REQUEST[$prethodnavrijednost]))
	{
		                	$im=htmlEntities($_REQUEST[$prethodnavrijednost], ENT_QUOTES);
                        print $im;
                    }
}
?>