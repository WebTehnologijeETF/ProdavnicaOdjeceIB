
function BrisanjeKomentaraValidacija()
{
	var ispravno=true;
	if(document.BrisanjeKomentaraForma.id1.value=="")
	{
         document.getElementById("GreskaId1").style.display="block";
         ispravno=false;
	}
	else
	{
		ispravno=true;
		document.getElementById("GreskaId1").style.display="none";

	}
	return ispravno;
}