<?php 
header('Content-Type: text/html; charset=utf-8');
function datum($dat)
{
	     //$dat="novosti/".$dat;
	//$dat="novakolekcija.txt";
		//if(file_exists($dat))
		//	$redovi=file($dat);
		     $r=htmlEntities($dat[0], ENT_QUOTES);
		     echo $r;
		 
}
function naslov($dat)
{
	       // $dat="novosti/".$dat;
           //if(file_exists($dat))
			//$redovi=file($dat);
		     $ispis=ucwords(strtolower($dat[2]));
		     $i=htmlEntities($ispis, ENT_QUOTES);
		     echo $i;
}
function slika($dat)
{
	// $dat="novosti/".$dat;
   //if(file_exists($dat))
	//		$redovi=file($dat);
		    $r=htmlEntities($dat[3], ENT_QUOTES);
		     echo $r;
}
function autor($dat)
{
	// $dat="novosti/".$dat;
 //if(file_exists($dat))
	//		$redovi=file($dat);
		    $r=htmlEntities($dat[1], ENT_QUOTES);
		     echo $r;
}
function link1($dat, $html)
{
	 //$dat="novosti/".$dat;
	$brojac=0;
	$imaga=0;
   //if(file_exists($dat))
	//		$redovi=file($dat);
    foreach ($dat as $k) {
    	
    if(strcmp($k,"--")!=1)
    {
       $imaga=$brojac;
       
    }
    $brojac=$brojac+1;
    }
    if(($imaga+1)<sizeof($dat))
    {
    	echo '<a href="" onclick="OtvaranjeDetaljnije("");">Detaljnije</a>';
    }
}
function tekstnovostiukratko($dat)
{
	 //$dat="novosti/".$dat;
    $brojac=0;
	$tekstnovosti="";
	$granica=0;
	$brojac1=0;
   //if(file_exists($dat))
			//$redovi=file($dat);
	foreach ($dat as $key) {
		if(strcmp($key,"--")!=1)
		{
			$granica=$brojac;	
		}
		
		$brojac=$brojac+1;
	}
	foreach ($dat as $key) {
		if($granica!=0 && $brojac1<$granica && $brojac1>=4)
		{
            $tekstnovosti.=$key;
		}
		$brojac1=$brojac1+1;
	}
	$r=htmlEntities($tekstnovosti, ENT_QUOTES);
		     echo $r;
	
}
function tekstnovosti($dat)
{
	 //$dat="novosti/".$dat;
	$brojac=0;
	$brojac1=0;
	$tekstnovosti="";
    $granica=0;
  // if(file_exists($dat))
			//$redovi=file($dat);

	foreach ($dat as $key) {
		
		if(strcmp($key,"--")!=1)
		{
			$granica=$brojac;
		}
		if($brojac>$granica && $granica!=0)
			$tekstnovosti.=$key;
		$brojac=$brojac+1;
	}
	$r=htmlEntities($tekstnovosti, ENT_QUOTES);
		     echo $r;
}
?>