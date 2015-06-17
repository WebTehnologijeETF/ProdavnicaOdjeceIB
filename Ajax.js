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
  document.getElementById("ListaKupacih").style.display="none";
  document.getElementById("ListaJakni").style.display="none";
  document.getElementById("ListaJakniKaputa").style.display="none";
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
  document.getElementById("ListaHlacaMuskarci").style.display="none";
  document.getElementById("ListaJakniKaputaMuskarci").style.display="none";
  document.getElementById("ListaJakniMuskarci").style.display="none";
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

function SakrijDetaljnije(stringic)
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
    document.getElementById(stringic).innerHTML=xmlhttp.responseText;
    }
  }
  var string="detaljnije.php?"+"txt="+stringic;
xmlhttp.open("GET","SakrijNovoDetaljnije.php?id="+stringic,true);
xmlhttp.send();
}

function SakrijDetaljnije1(stringic)
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
    document.getElementById(stringic+"a").innerHTML=xmlhttp.responseText;
    }
  }
  var string="detaljnije.php?"+"txt="+stringic;
xmlhttp.open("GET","SakrijNovoDetaljnije.php?id="+stringic,true);
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

function OtvoriMajice()
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
    document.getElementById("Slicica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","Majice.html",true);
xmlhttp.send();
}

function OtvoriKosulje()
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
    document.getElementById("Slicica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","Kosulje.html",true);
xmlhttp.send();
}

function OtvoriMajiceKratkiZene()
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
    document.getElementById("Slicica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","MajiceKratkiRukavZene.html",true);
xmlhttp.send();
}

function OtvoriMajiceDugiRukavZene()
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
    document.getElementById("Slicica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","MajiceDugiRukav.html",true);
xmlhttp.send();
}

function OtvoriKosuljeDugiRukavZene()
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
    document.getElementById("Slicica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","KosuljeDugiRukav.html",true);
xmlhttp.send();
}

function OtvoriKosuljeKratkiRukavZene()
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
    document.getElementById("Slicica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","KosuljeKratkiRukav.html",true);
xmlhttp.send();
}

function OtvoriJakneKaputiZene()
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
    document.getElementById("Slicica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","JakneKaputiZene.html",true);
xmlhttp.send();
}

function OtvoriJakneZene()
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
    document.getElementById("Slicica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","JakneZene.html",true);
xmlhttp.send();
}

function OtvoriKaputeZene()
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
    document.getElementById("Slicica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","KaputiZene.html",true);
xmlhttp.send();
}

function OtvoriKozneJakneZene()
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
    document.getElementById("Slicica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","KozneJakneZene.html",true);
xmlhttp.send();
}

function OtvoriHaljine()
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
    document.getElementById("Slicica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","Haljine.html",true);
xmlhttp.send();

}

function OtvoriHaljineKratke()
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
    document.getElementById("Slicica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","HaljineKratke.html",true);
xmlhttp.send();
}

function OtvoriHaljineSrednje()
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
    document.getElementById("Slicica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","HaljineSrednje.html",true);
xmlhttp.send();
}

function OtvoriHaljineDuge()
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
    document.getElementById("Slicica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","HaljineDuge.html",true);
xmlhttp.send();
}

function OtvoriHlaceZene()
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
    document.getElementById("Slicica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","HlaceZene.html",true);
xmlhttp.send();
}

function OtvoriSkinyHlaceZene()
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
    document.getElementById("Slicica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","SkinnyHlaceZene.html",true);
xmlhttp.send();
}
function OtvoriSlimHlaceZene()
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
    document.getElementById("Slicica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","SlimHlaceZene.html",true);
xmlhttp.send();
}

function OtvoriRegularHlaceZene()
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
    document.getElementById("Slicica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","RegularHlaceZene.html",true);
xmlhttp.send();
}

function OtvoriSorceveZene()
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
    document.getElementById("Slicica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","Sorcevi.html",true);
xmlhttp.send();
}


function OtvoriSuknje()
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
    document.getElementById("Slicica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","Suknje.html",true);
xmlhttp.send();
}

function OtvoriSuknjeKratke()
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
    document.getElementById("Slicica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","KratkeSuknje.html",true);
xmlhttp.send();
}

function OtvoriSuknjeSrednje()
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
    document.getElementById("Slicica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","SrednjeSuknje.html",true);
xmlhttp.send();
}

function OtvoriSuknjeDuge()
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
    document.getElementById("Slicica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","DugeSuknje.html",true);
xmlhttp.send();
}

function OtvoriKupaceZene()
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
    document.getElementById("Slicica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","KupaciZeneSve.html",true);
xmlhttp.send();
}

function OtvoriKupaceJednodijelniZene()
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
    document.getElementById("Slicica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","JednodijelniKupaci.html",true);
xmlhttp.send();
}

function OtvoriKupaceDvodijelniZene()
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
    document.getElementById("Slicica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","KupaciDvodijelniZene.html",true);
xmlhttp.send();
}

function OtvoriPoluveriZene()
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
    document.getElementById("Slicica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","PoluveriZene.html",true);
xmlhttp.send();
}
function OtvoriPoluveriZatvoreniZene()
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
    document.getElementById("Slicica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","PoluveriZatvoreni.html",true);
xmlhttp.send();
}

function OtvoriPoluveriRaskopcavanjeZene()
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
    document.getElementById("Slicica").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","PoluverRaskopcavanje.html",true);
xmlhttp.send();
}

function OtvoriMajiceMuskarci()
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
    document.getElementById("Slicica1").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","MajiceMuskarci.html",true);
xmlhttp.send();
}

function OtvoriMajiceKratkiRukavMuskarci()
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
    document.getElementById("Slicica1").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","MajiceKratkiRukavMuskarci.html",true);
xmlhttp.send();
}

function OtvoriMajiceDugiRukavMuskarci()
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
    document.getElementById("Slicica1").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","MajiceDugiRukavMuskarci.html",true);
xmlhttp.send();
}

function OtvoriKosuljeMuskarci()
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
    document.getElementById("Slicica1").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","KosuljeMuskarci.html",true);
xmlhttp.send();
}

function OtvoriKosuljeDugiRukavMuskarci()
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
    document.getElementById("Slicica1").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","KosuljeDugiRukavMuskarci.html",true);
xmlhttp.send();
}

function OtvoriKosuljeKratkiRukavMuskarci()
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
    document.getElementById("Slicica1").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","KosuljeKratkiRukavMuskarci.html",true);
xmlhttp.send();
}

function OtvoriPoluvereMuskarci()
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
    document.getElementById("Slicica1").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","PoluveriMuskarci.html",true);
xmlhttp.send();
}

function OtvoriJakneKaputeMuskarci()
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
    document.getElementById("Slicica1").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","JakneKaputiMuskarci.html",true);
xmlhttp.send();
}

function OtvoriJakneMuskarci()
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
    document.getElementById("Slicica1").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","JakneMuskarci.html",true);
xmlhttp.send();
}

function OtvoriKaputiMuskarci()
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
    document.getElementById("Slicica1").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","KaputiMuskarci.html",true);
xmlhttp.send();
}

function OtvoriHlaceMuskarci()
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
    document.getElementById("Slicica1").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","HlaceMuskarci.html",true);
xmlhttp.send();
}

function OtvoriSlimHlaceMuskarci()
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
    document.getElementById("Slicica1").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","SlimHlaceMuskarci.html",true);
xmlhttp.send();
}
function OtvoriSkinyHlaceMuskarci()
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
    document.getElementById("Slicica1").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","SkinyHlaceMuskarci.html",true);
xmlhttp.send();
}
function OtvoriRegularHlaceMuskarci()
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
    document.getElementById("Slicica1").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","RegularHlaceMuskarci.html",true);
xmlhttp.send();
}
function OtvoriSorceviMuskarci()
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
    document.getElementById("Slicica1").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","SorceviMuskarci.html",true);
xmlhttp.send();
}

function OtvoriKupaceMuskarci()
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
    document.getElementById("Slicica1").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","KupaciMuskarci.html",true);
xmlhttp.send();
}

function OtvoriGaceMuskarci()
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
    document.getElementById("Slicica1").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","GaceMuskarci.html",true);
xmlhttp.send();
}

 function SaljiMail(string1,string2)
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
xmlhttp.open("GET","GenerisanjePassworda.php?korisnickoime="+string1+"&vrijeme="+string2,true);
xmlhttp.send();
}

 function OsvjezavanjeKomentariNovosti()
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
    document.getElementById("Novosti").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","DodavanjeNovostiNovo.php",true);
xmlhttp.send();
}


