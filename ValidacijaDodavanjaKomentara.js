function ValidirajDodavanjeKomentara()
{
	var ispravno=true;
	if(document.FormaDodavanjeKomentara.komentar.value=="")
	{
       ispravno=false;
       document.getElementById("GreskaKomentar").style.display="block";
	}
	else
	{
		ispravno=true;
		document.getElementById("GreskaKomentar").style.display="none";
	}
	return ispravno;
}