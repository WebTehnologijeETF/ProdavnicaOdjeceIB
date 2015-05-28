function loadXMLDoc6()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("Stranica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","Administrator.html",true);
xmlhttp.send();

}
function loadXMLDoc4()
{

var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
      document.getElementById("Stranica").innerHTML=xmlhttp.responseText;
    document.getElementById("ImeGreska").style.display="none";
   document.getElementById("PrezimeGreska").style.display="none";
   document.getElementById("GreskaEmail").style.display="none";
   document.getElementById("PrimjedbaGreska").style.display="none";
   document.getElementById("SlikaOpcina").style.display="none";
   document.getElementById("SlikaMjesto").style.display="none";

    
    }
  }
xmlhttp.open("GET","kontakt.html",true);
xmlhttp.send();
}
function loadXMLDoc3()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("Stranica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","Onama.php",true);
xmlhttp.send();
}
function loadXMLDoc2()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("Stranica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","dobavljaci.html",true);
xmlhttp.send();
}
function loadXMLDoc()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("Stranica").innerHTML=xmlhttp.responseText;
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
    }
  }
xmlhttp.open("GET","zene.html",true);
xmlhttp.send();
}
function loadXMLDoc1()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("Stranica").innerHTML=xmlhttp.responseText;
    document.getElementById("ListaMajiceMuskarci").style.display="none";
  document.getElementById("ListaKosulja").style.display="none";
  document.getElementById("ListaPoluveriMuskarci").style.display="none";
  document.getElementById("ListaHlacaMuskarci").style.display="none";
  document.getElementById("ListaDonjeRubljeMuskarci").style.display="none";
  document.getElementById("ListaGacaMuskarci").style.display="none";
  document.getElementById("ListaJakniKaputaMuskarci").style.display="none";
  document.getElementById("ListaJakniMuskarci").style.display="none";
  document.getElementById("ListaKaputaMuskarci").style.display="none";
  document.getElementById("ListaSorcevaMuskarci").style.display="none";
  document.getElementById("ListaKupacihMuskarci").style.display="none";
  document.getElementById("ListaMuskarci").style.display="block";

    }
  }
xmlhttp.open("GET","muskarci.html",true);
xmlhttp.send();
}

function loadXMLDoc5()
{
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("Stranica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","tabela.html",true);
xmlhttp.send();
}

function DodavanjeOdjeceAjax()
{
  var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("Stranica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","DodavanjeProizvoda.html",true);
xmlhttp.send();
}

function BrisanjeOdjeceAjax()
{
  var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("Stranica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","BrisanjeProizvoda.html",true);
xmlhttp.send();
}

function PrikazTabeleProizvoda()
{
  var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("Stranica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","PrikaziProizvode.html",true);
xmlhttp.send();  
}
function MijenjanjeOdjeceAjax()
{
  var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("Stranica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","IzmjenaProizvoda.html",true);
xmlhttp.send();
}

function OtvaranjeNeispravnaForma()
{
  var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("Stranica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","Obrada.php",true);
xmlhttp.send();
}

function OtvaranjeDetaljnije(stringic)
{
  var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("Stranica").innerHTML=xmlhttp.responseText;
    }
  }
  var string="detaljnije.php?"+"txt="+stringic;
xmlhttp.open("GET","detaljnije.php?txt="+stringic,true);
xmlhttp.send();
}
function OtvaranjeKomentara(stringic)
{
  var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("Stranica").innerHTML=xmlhttp.responseText;
    document.getElementById("GreskaKomentar").style.display="none";
    }
  }
  var string="detaljnije.php?"+"id="+stringic;
xmlhttp.open("GET","komentari.php?id="+stringic,true);
xmlhttp.send();
}

function OdgovorNaKomentar(stringic)
{
  var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("Stranica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","odgovornamail.php?email="+stringic,true);
xmlhttp.send();
}
function OperacijeOdjeca()
{
  var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("Stranica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","OperacijeOdjeca.html",true);
xmlhttp.send();
}

function OperacijeNovosti()
{
   var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("Stranica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","OperacijeNovosti.php",true);
xmlhttp.send();
}

function OperacijeKorisnici()
{
  var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("Stranica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","OperacijeKorisnici.php",true);
xmlhttp.send();
}

function DodavanjeNovostiAjax()
{
   var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("Stranica").innerHTML=xmlhttp.responseText;
    document.getElementById("GreskaNaslov1").style.display="none";
    document.getElementById("GreskaTekst1").style.display="none";
    document.getElementById("GreskaAutor1").style.display="none";
    document.getElementById("GreskaSlika1").style.display="none";
    document.getElementById("GreskaSazetak1").style.display="none";
    }
  }
xmlhttp.open("GET","DodavanjeNovostiPrekoForme.php",true);
xmlhttp.send();
}

function MijenjanjeNovostiAjax()
{
 var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("Stranica").innerHTML=xmlhttp.responseText;
    document.getElementById("GreskaMijenjanjeId").style.display="none";
    }
  }
xmlhttp.open("GET","MijenjanjeNovosti.php",true);
xmlhttp.send();
}

function BrisanjeNovostiAjax()
{
  var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("Stranica").innerHTML=xmlhttp.responseText;
    document.getElementById("GreskaIdNovost").style.display="none";
    }
  }
xmlhttp.open("GET","BrisanjeNovosti.php",true);
xmlhttp.send();
}

function BrisanjeKomentara()
{
  var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("Stranica").innerHTML=xmlhttp.responseText;
    document.getElementById("GreskaId1").style.display="none";
    }
  }
xmlhttp.open("GET","BrisanjeKomentara.php",true);
xmlhttp.send();
}

function DodavanjeKorisnikaAjax()
{
  var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("Stranica").innerHTML=xmlhttp.responseText;
    document.getElementById("GreskaKorisnickoIme").style.display="none";
    document.getElementById("GreskaEmail").style.display="none";
    document.getElementById("GreskaPassword").style.display="none";
    }
  }
xmlhttp.open("GET","DodavanjeKorisnika.php",true);
xmlhttp.send();
}
function BrisanjeKorisnikaAjax()
{
  var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("Stranica").innerHTML=xmlhttp.responseText;
    document.getElementById("GreskaIdKorisnika").style.display="none";
    }
  }
xmlhttp.open("GET","BrisanjeKorisnika.php",true);
xmlhttp.send();
}
function MijenjanjeKorisnikaAjax()
{
  var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("Stranica").innerHTML=xmlhttp.responseText;
    document.getElementById("GreskaNemaId").style.display="none"
    }
  }
xmlhttp.open("GET","MijenjanjeKorisnika.php",true);
xmlhttp.send();
}

function OtvaranjeAdminPanela()
{
  var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("Stranica").innerHTML=xmlhttp.responseText;
    document.getElementById("GreskaNemaId").style.display="none"
    }
  }
xmlhttp.open("GET","AdminPanel.php",true);
xmlhttp.send();
}