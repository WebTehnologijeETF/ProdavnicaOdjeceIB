<?php
   //obavezna polja validacija
   $vrijednost=0;
   $prikazi="";
   $vrijednostime=0;
   $vrijednostprezime=0;
   $vrijednostemail=0;
   $vrijednostprimjedba=0;
   $vrijednostdatum=0;
   $vrijednostradio=0;

   if(isset($_POST['Ime']))
   {
   	$ime=$_POST['Ime'];
   	if($ime=="" && ctype_space($ime)==false)
   	{
   		$vrijednost=1;
      $vrijednostime=1;
   	}
    else
    {
      $vrijednost=0;
      $vrijednostime=0;
    }
   }

   if(isset($_POST['Prezime']) )
   {
   	$prezime=$_POST['Prezime'];
   	if($prezime=="" && ctype_space($prezime)==false)
   	{
   		$vrijednost=1;
      $vrijednostprezime=1;
   	}
    else
    {
      $vrijednost=0;
      $vrijednostprezime=0;
    }
   }

   //Validacija email
   if(isset($_POST['email']) ) // da li je whitespace
   {
   	$email=$_POST['email'];
   	if($email=="" && ctype_space($email)==false)
   	{

   		$vrijednost=1;
      $vrijednostemail=1;
   	}
   	else
   	{
   	if(!filter_var($email,FILTER_VALIDATE_EMAIL))
   	{
   		$vrijednost=1;
      $vrijednostemail=1;
   	}
   }
   }

   //Unakrsna validacija
   if(isset($_POST['Primjedbe']) && isset($_POST['Track']))
   {
   	 $primjedbe=$_POST['Primjedbe'];
   	 $traka=$_POST['Track'];
     if($traka<50 && $primjedbe=="" && ctype_space($primjedbe)==false)
     {
     	$vrijednost=1;
      $vrijednostprimjedba=1;
     }
     else
    {
      $vrijednost=0;
      $vrijednostprimjedba=0;
    }
   }

   //RadioButton
   if(!isset($_POST['zensko']))
   {
   	$vrijednost=1;
    $vrijednostradio=1;
   }
   
   //ValidacijaDatuma
   if(isset($_POST['startdate1']))
   {
     if($_POST['startdate1']=="")
     {
        $vrijednost=1;
      $vrijednostdatum=1;
     }
     else
     {
       $vrijednost=0;
      $vrijednostdatum=0;
     
     }
    }
    if($vrijednostime==1 || $vrijednostprezime==1 || $vrijednostdatum==1 || $vrijednostradio==1 || $vrijednostemail==1 || $vrijednostprimjedba==1)
    {
    	$prikazi='kontakt.php';
    }
    if($vrijednostime==0 && $vrijednostprezime==0 && $vrijednostdatum==0 && $vrijednostradio==0 && $vrijednostemail==0 && $vrijednostprimjedba==0)
    { 
      $prikazi='ispravno.php';
    }
?>