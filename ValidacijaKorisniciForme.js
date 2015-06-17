function ValidirajMijenjanjeKorisnika()
{
	var ispravno=true;
	if(document.MijenjanjeKorisnika.korisnickoime.value=="")
	{
	document.getElementById("GreskaNemaId").style.display="block";
	ispravno=false;
}
    else 
    {
    document.getElementById("GreskaNemaId").style.display="none";
    ispravno=true;
}
  return ispravno;
    
}

function ValidirajDodavanjeKorisnika()
{
	var ispravno=true;
	var ispravno1=true;
	var ispravno2=true;
	var ispravno3=true;

	if(document.DodavanjeKorisnika.korisnickoime.value=="")
	{
	document.getElementById("GreskaKorisnickoIme").style.display="block";
	ispravno1=false;
}
    else 
    {
    document.getElementById("GreskaKorisnickoIme").style.display="none";
    ispravno1=true;
}
   if(document.DodavanjeKorisnika.email.value=="")
   {
   	document.getElementById("GreskaEmail").style.display="block";
	ispravno2=false;
   }
   else
   {
   	document.getElementById("GreskaEmail").style.display="none";
   	ispravno2=true;
   }

   if(document.DodavanjeKorisnika.password.value=="")
   {
   	document.getElementById("GreskaPassword").style.display="block";
	ispravno3=false;
   }
   else
   {
   	document.getElementById("GreskaPassword").style.display="none";
   	ispravno3=true;
   }

   if(ispravno3==true && ispravno2==true && ispravno1==true)
   {
   	return true;
   }
   else
   {
   	return false;
   }

}

function BrisanjeKorisnika()
{
   var ispravno=true;
   if(document.BrisanjeKorisnika1.korisnickoime.value=="")
   {
   document.getElementById("GreskaIdKorisnika").style.display="block";
	ispravno=false;
   }
   else
   {
   	document.getElementById("GreskaIdKorisnika").style.display="none";
   	ispravno=true;
   }
   return ispravno;
}