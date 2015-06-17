<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>I&amp;&Beta;</title>

<link rel="stylesheet" type="text/css" href="stil.css">
<link rel="shortcut icon" href="http://www.clker.com/cliparts/3/z/E/1/d/Q/blue-circle-flame-md.png">
<script src="ZeneStablo.js"></script>
<script src="DodavanjeProizvodaAjax.js"></script>
<script src="BrisanjeProizvodAjax.js" ></script>
<script src="ResetButton.js"></script>
<script src="IzmjenaProizvodaAjax.js" ></script>
<script src="MuskarciStablo.js" ></script>
<script src="ValidacijaKontaktForme.js"></script>
<script src="Ajax.js"></script>
<script src="PrikaziProizvodeAjax.js"></script>
<script src="ValidacijaKorisniciForme.js"></script>
<script src="ValidacijaBrisanjaKomentara.js"></script>
<script type="text/javascript">
  
  setInterval(function(){ 
  
  var xmlhttp;

if (window.XMLHttpRequest)
  {
  xmlhttp=new XMLHttpRequest();
  }
else
  {
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("Novosti").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","DodavanjeNovosti.php",true);
xmlhttp.send();
     }, 3660);

</script>
<script src="ValidacijaNovosti.js"></script>
</head>

<body >
  <div id="Prijava">
    <?php
    if(!isset($_SESSION['username']))
    {
       include "PrijavaObicna.html";
    }
    else 
    {

      include "OdjavaObicna.php";
    }
    ?>
</div>
<div id="Traka">
<ul>
    <li id="Inicijali" class="Zajednicko">I&amp;&Beta;</li>
    <li id="Informacije" class="Zajednicko"> <a class="MenuLink" href="#" onclick="loadXMLDoc3()">O nama</a></li>
    <li id="Zene" class="Zajednicko"><a class="MenuLink"  href="#" onclick="loadXMLDoc()">Žene</a></li>
    <li id="Muskarci" class="Zajednicko"><a class="MenuLink" href="#" onclick="loadXMLDoc1()">Muškarci</a></li>
    <li id="Kontakt" class="Zajednicko"><a class="MenuLink" href="#" onclick="loadXMLDoc4()">Kontakt</a></li>
    <li id="Dobavljaci" class="Zajednicko"><a class="MenuLink"  href="#" onclick="loadXMLDoc2()">Dobavljači</a></li>
    <li id="Administrator" class="Zajednicko"><a class="MenuLink" href="#" onclick="loadXMLDoc6()">Administrator</a></li>
</ul>
</div>

<div id="Stranica">  

<?php
if(isset($_SESSION['username']))
{
     $brojac1=0;
     $veza = new PDO("mysql:dbname=prodavnicaodjeceibbaza;host=localhost;charset=utf8", "ilvana", "ilvana");
     $veza->exec("set names utf8");
    $mijenjaj=$veza->query("SELECT korisnickoime,email,sifra,tip FROM korisnik");
     foreach ($mijenjaj as $key) {
      $hash=md5($_GET['adminsifra']);
        if(strcmp($key['korisnickoime'],$_SESSION['username'])==0 && strcmp($key['tip'],'admin')==0) //dodati uslov za sifru
        {
           $_SESSION['username']=$key['korisnickoime'];
           include "AdminPanel.html";
            $username=$_SESSION['username'];
           echo '<div id="PonovnaPrijavaOdjel"><p id="PonovnaPrijava">Već ste se prijavili.</p></div>';
           $brojac1=1;
         }
         }
         if($brojac1==0)
         {
          echo '<div id="Prijava"><p id="Prijava">Niste administrator.Prijavite se kao administrator.</p></div>';
          include "Administrator.html";
          session_unset();
          //echo "string";
          
         }
}
else if(isset($_GET['adminime']) && isset($_GET['adminsifra']))
{
    $brojac=0;
     $veza = new PDO("mysql:dbname=prodavnicaodjeceibbaza;host=localhost;charset=utf8", "ilvana", "ilvana");
     $veza->exec("set names utf8");
    $mijenjaj=$veza->query("SELECT korisnickoime,email,sifra,tip FROM korisnik");
     foreach ($mijenjaj as $key) {
      $hash=md5($_GET['adminsifra']);
        if(strcmp($key['korisnickoime'],$_GET['adminime'])==0 && strcmp($key['sifra'],$hash)==0 && strcmp($key['tip'],'admin')==0) //dodati uslov za sifru
        {
        
           $_SESSION['username']=$key['korisnickoime'];
           include "AdminPanel.html";
           $brojac=1;

        }
     }
     if($brojac==0)
     {
       include "Administrator.html";
      echo '<div id="NeuspjesnaPrijava"><p id="NeispravnaPrijava">Neispravan password ili korisnicko ime, ponovite unos!</p></div>';

     }
}
?>
</div>
</body>
 
</html>
