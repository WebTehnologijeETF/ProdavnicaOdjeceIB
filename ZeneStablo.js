function ZatvoriSve()
{
	document.getElementById("ListaKosuljaZene").style.display="none";
	document.getElementById("ListaMajiceZene").style.display="none";
	document.getElementById("ListaPoluveraZene").style.display="none";
	document.getElementById("ListaHaljine").style.display="none";
	document.getElementById("ListaHlacaZene").style.display="none";
	document.getElementById("ListaSuknje").style.display="none";
	document.getElementById("ListaDonjeRublje").style.display="none";
	document.getElementById("ListaGace").style.display="none";
	document.getElementById("ListaKupacih").style.display="none";
	document.getElementById("ListaPotkusulja").style.display="none";
	document.getElementById("ListaGrudnjaka").style.display="none";
	document.getElementById("ListaJakni").style.display="none";
	document.getElementById("ListaJakniKaputa").style.display="none";
	document.getElementById("ListaSorceva").style.display="none";
	document.getElementById("ListaKaputaZene").style.display="none";
	document.getElementById("ListaZene").style.display="block"
	//document.getElementById("ListaMuskarci").style.display="block"

}
function KlikNaZene()
{
	if(document.getElementById("ListaZene").style.display=="none")
	{
		document.getElementById("ListaZene").style.display="block";
		document.getElementById("SlikaNestaniZene").src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-up-01-16.png";
	}
	else
	{
		document.getElementById("ListaZene").style.display="none";
		document.getElementById("SlikaNestaniZene").src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-down-01-16.png";
	}
}
function KlikNaSorceve()
{
	if(document.getElementById("ListaSorceva").style.display=="none")
	{
		document.getElementById("ListaSorceva").style.display="block";
		document.getElementById("SlikaNestaniSorcevi").src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-up-01-16.png";
	}
	else
	{
		document.getElementById("ListaSorceva").style.display="none";
		document.getElementById("SlikaNestaniSorcevi").src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-down-01-16.png";
	}
}
function KlikNaJakneKapute()
{
	if(document.getElementById("ListaJakniKaputa").style.display=="none")
	{
		document.getElementById("ListaJakniKaputa").style.display="block";
		document.getElementById("SlikaNestaniJakneKaputi").src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-up-01-16.png";
	}
	else
	{
		document.getElementById("ListaJakniKaputa").style.display="none";
		document.getElementById("SlikaNestaniJakneKaputi").src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-down-01-16.png";
	}
}
function KlikNaJakne()
{
	if(document.getElementById("ListaJakni").style.display=="none")
	{
		document.getElementById("ListaJakni").style.display="block";
		document.getElementById("SlikaNestaniJakne").src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-up-01-16.png";
	}
	else
	{
		document.getElementById("ListaJakni").style.display="none";
		document.getElementById("SlikaNestaniJakne").src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-down-01-16.png";
	}
}

function KlikNaGrudnjake()
{
	if(document.getElementById("ListaGrudnjaka").style.display=="none")
	{
		document.getElementById("ListaGrudnjaka").style.display="block";
		document.getElementById("SlikaNestaniGrudnjaci").src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-up-01-16.png";
	}
	else
	{
		document.getElementById("ListaGrudnjaka").style.display="none";
		document.getElementById("SlikaNestaniGrudnjaci").src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-down-01-16.png";
	}
}
function KlikNaKapute()
{
	if(document.getElementById("ListaKaputaZene").style.display=="none")
	{
		document.getElementById("ListaKaputaZene").style.display="block";
		document.getElementById("SlikaNestaniKaputi").src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-up-01-16.png";
	}
	else
	{
		document.getElementById("ListaKaputaZene").style.display="none";
		document.getElementById("SlikaNestaniKaputi").src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-down-01-16.png";
	}
}
function KlikNaPotkusulje()
{
	if(document.getElementById("ListaPotkusulja").style.display=="none")
	{
		document.getElementById("ListaPotkusulja").style.display="block";
		document.getElementById("SlikaNestaniPotkusulje").src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-up-01-16.png";
	}
	else
	{
		document.getElementById("ListaPotkusulja").style.display="none";
	document.getElementById("SlikaNestaniPotkusulje").src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-down-01-16.png";
}
	
}
function KlikNaKosulje()
{
	if(document.getElementById("ListaKosuljaZene").style.display=="none")
	{
		document.getElementById("ListaKosuljaZene").style.display="block";
		document.getElementById("SlikaNestaniKosulje").src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-up-01-16.png";
	}
	else
	{
		document.getElementById("ListaKosuljaZene").style.display="none";
	document.getElementById("SlikaNestaniKosulje").src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-down-01-16.png";
}
}

function KlikNaMajiceZene()
{
	if(document.getElementById("ListaMajiceZene").style.display=="none")
	{
		document.getElementById("ListaMajiceZene").style.display="block";
		document.getElementById("SlikaNestaniMajice").src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-up-01-16.png";
	}
	else
	{
		document.getElementById("ListaMajiceZene").style.display="none";
	    document.getElementById("SlikaNestaniMajice").src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-down-01-16.png";
	}
}
function KlikNaPoluvere()
{
	if(document.getElementById("ListaPoluveraZene").style.display=="none")
	{
		document.getElementById("ListaPoluveraZene").style.display="block";
		document.getElementById("SlikaNestaniPoluveri").src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-up-01-16.png";
	}
	else
	{
		document.getElementById("ListaPoluveraZene").style.display="none";
		document.getElementById("SlikaNestaniPoluveri").src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-down-01-16.png";
	}
}
function KlikNaHaljine()
{
	if(document.getElementById("ListaHaljine").style.display=="none")
	{
		document.getElementById("ListaHaljine").style.display="block";
		document.getElementById("SlikaNestaniHaljine").src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-up-01-16.png";
	}
	else
	{
		document.getElementById("ListaHaljine").style.display="none";
		document.getElementById("SlikaNestaniHaljine").src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-down-01-16.png";
	}

}
function KlikNaHlace()
{
	if(document.getElementById("ListaHlacaZene").style.display=="none")
	{
		document.getElementById("ListaHlacaZene").style.display="block";
		document.getElementById("SlikaNestaniHlace").src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-up-01-16.png";
	}
	else
	{
		document.getElementById("ListaHlacaZene").style.display="none";
		document.getElementById("SlikaNestaniHlace").src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-down-01-16.png";
	}
}
function KlikNaSuknje()
{
	if(document.getElementById("ListaSuknje").style.display=="none")
	{
		document.getElementById("ListaSuknje").style.display="block";
		document.getElementById("SlikaNestaniSuknje").src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-up-01-16.png";
	}
	else
	{
		document.getElementById("ListaSuknje").style.display="none";
		document.getElementById("SlikaNestaniSuknje").src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-down-01-16.png";
	}
}
function KlikNaDonjeRublje()
{
	if(document.getElementById("ListaDonjeRublje").style.display=="none")
	{
		document.getElementById("ListaDonjeRublje").style.display="block";
		document.getElementById("SlikaNestaniDonjeRublje").src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-up-01-16.png";
	}
	else
	{
		document.getElementById("ListaDonjeRublje").style.display="none";
		document.getElementById("SlikaNestaniDonjeRublje").src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-down-01-16.png";
	}
}
function KlikNaGace()
{
	if(document.getElementById("ListaGace").style.display=="none")
	{
		document.getElementById("ListaGace").style.display="block";
		document.getElementById("SlikaNestaniGace").src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-up-01-16.png";
	}
	else
	{
		document.getElementById("ListaGace").style.display="none";
		document.getElementById("SlikaNestaniGace").src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-down-01-16.png";
	}
}
function KlikNaKupace()
{
	if(document.getElementById("ListaKupacih").style.display=="none")
	{
		document.getElementById("ListaKupacih").style.display="block";
		document.getElementById("SlikaNestaniKupaci").src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-up-01-16.png";
	}
	else
	{
		document.getElementById("ListaKupacih").style.display="none";
		document.getElementById("SlikaNestaniKupaci").src="https://cdn3.iconfinder.com/data/icons/faticons/32/arrow-down-01-16.png";
	}
}