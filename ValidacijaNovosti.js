
function BrisanjeNovostiValidacija()
{
	var ispravno=true;
	if(document.BrisanjeNovostiForma.id1.value=="")
	{
		document.getElementById("GreskaIdNovost").style.display="block";
		ispravno=false;
	}
	else
	{
		document.getElementById("GreskaIdNovost").style.display="none";
		ispravno=true;
	}
	return ispravno;
}
function MijenjanjeNovostiValidacija()
{
	var ispravno=true;
	if(document.MijenjanjeNovostiForma.id1.value=="")
	{
		document.getElementById("GreskaMijenjanjeId").style.display="block";
		ispravno=false;
	}
	else
	{
		document.getElementById("GreskaMijenjanjeId").style.display="none";
		ispravno=true;
	}
	return ispravno;
}

function DodavanjeNovosti()
{
	var ispravno1=true;
	var ispravno2=true;
	var ispravno3=true;
	var ispravno4=true;
	var ispravno5=true;
	if(document.DodavanjeNovostiForma.naslov.value=="")
	{
          document.getElementById("GreskaNaslov1").style.display="block";
          ispravno1=false;
	}
	else
	{
		ispravno1=true;
		document.getElementById("GreskaNaslov1").style.display="none";
	}
	if(document.DodavanjeNovostiForma.autor.value=="")
	{
		ispravno2=false;
		document.getElementById("GreskaAutor1").style.display="block";
	}
	else
	{
		ispravno2=true;
		document.getElementById("GreskaAutor1").style.display="none";
	}
	if(document.DodavanjeNovostiForma.tekst.value=="")
	{
		document.getElementById("GreskaTekst1").style.display="block";
		ispravno3=false;
	}
	else
	{
		ispravno3=true;
		document.getElementById("GreskaTekst1").style.display="block";
	}
	if(document.DodavanjeNovostiForma.slika.value=="")
	{
       ispravno4=false;
       document.getElementById("GreskaSlika1").style.display="block";

	}
	else
	{
		ispravno4=true;
		document.getElementById("GreskaSlika1").style.display="none";
	}

	if(document.DodavanjeNovostiForma.sazetak.value=="")
	{
		document.getElementById("GreskaSazetak1").style.display="block";
		ispravno5=false;
	}
	else
	{
		ispravno5=true;
		document.getElementById("GreskaSazetak1").style.display="none";
	}
	if(ispravno5==true && ispravno4==true && ispravno3==true && ispravno2==true && ispravno1==true)
	{
		return true;
	}
	else
	{
		return false;
	}
}

