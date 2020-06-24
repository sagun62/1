
<!DOCTYPE html>
<html>
    <head>
        <script src="main.js"></script>
        <link rel="shortcut icon" href="icon.png">
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
        
      <link rel="stylesheet" href="main.css" type="text/css">
      <title>Progen - The Future Is Now</title>
    
    </head>
<body>
    <div class="baner">
        <a href="index.html"><img src="logo2.png" alt="logo" id="logo"></a>
    </div>
    <div class="first-header">
          
          <section>
            <table id="tabela1">
                <tr>
                    <td class="nav"><a href="skonfiguruj.html" class="a">SKONFIGURUJ</a></td>	<td class="nav"><a href="cennik.html" class="a">POBIERZ CENNIK</a></td> 
                    <td class="nav"><a href="jazda.html" class="a">UMÓW JAZDĘ</a></td>   <td class="nav"><a href="dealer.html" class="a">ZNAJDŹ DEALERA</a></td> 
                    <td class="nav"><a href="login.php" class="a">LOGIN &nbsp; <img src="logowanie.png" alt="log" width="15px" height="15px" ></a></td>                 
                </tr>         
            </table> 
        </section>   
       
        <div id="wyszukiwarka" ondblclick="hide('wyszukiwarka')" >
           
            <form id="main-searchForm" name="search" action="" method="post" onsubmit="wyszukaj()">
                <input type="text"   id="szukaj" name="szukaj" autofocus placeholder="Wyszukaj" />
                <input type="image" src="lupa.png" value="submit" width="20px" height="20px" />
                
            </form>
        <hr>
      
            
            
        </div>
        
    </div>
    <div class="second-header">
        <section>
            <table id="tabela2">
                <tr>
                    <td class="nav2"><a id="modele" onclick="show('modele_pod')" class="a">MODELE</a></td>	<td class="nav2"><a href="oferta.html" class="a">OFERTA</a></td>
                     <td class="nav2"><a href="premiera.html" class="a">PREMIERY</a></td>  <td class="nav2"><a href="serwis.html" class="a">SERWIS</a></td> 
                       <td class="nav2"><a href="kontakt.html" class="a">KONTAKT</a></td>    
                       <td class="nav2"><img src="lupa.png" onclick="show('wyszukiwarka')" id="lupa" alt="lupa" width="20px" height="20px"></td> 
                </tr>               
            </table>
            
       
        </section>
        <div id="modele_pod" onclick="hide('modele_pod')" >
            <div class="modele1">
                <a href="huracan.html"><img src="hura.png" alt="hura"></a>
            <p class="nazwa">Progen Huracán</p>
            <p class="cena">Od 1 050 400zł</p>
            </div>
            <div class="modele1">
                <a href="panamera.html"><img src="pana.png" alt="panamera"></a>
            <p class="nazwa">Progen Panamera</p>
            <p class="cena">Od 426 140zł</p>
            </div>
            <div class="modele1">
                <a href="dbs.html"><img src="astonlogo.png" alt="astlogo"></a>
            <p class="nazwa">Progen DBS</p>
            <p class="cena">Od 1 548 902zł</p>
            </div>
            <div class="modele2">
                <a href="urus.html"><img src="urus.png" alt="urus"></a>
            <p class="nazwa">Progen Urus</p>
            <p class="cena">Od 1 950 000zł</p>
            </div>
            <div class="modele2">
                <a href="seria3.html"><img src="beta.png" alt="beta"></a>
            <p class="nazwa">Progen Seria3</p>
            <p class="cena">Od 142 900zł</p>
            </div>
            <div class="modele2">
                <a href="amg.html"><img src="merc.png" alt="merc"></a>
            <p class="nazwa">Progen AMG GT</p>
            <p class="cena">Od 736 500zł</p>
            </div>
        </div>
    </div>
    <div class="znajdz">
        
            
    
    <?php
$miasto = trim($_POST['miasto']);
if(empty($miasto))
{
echo '<div class="znajdz">
        
            
<form class="dealer-find" action = "znajdz-dealera.php" method = "POST" >

   <p class="dystans">Wybierz dealera: </p>
   <select name="miasto"  class="umow2">
   <option value="">Wybierz</option>
   <option value="rzeszow.php" >Rzeszów</option>
   <option value="warszawa.php">Warszawa</option>
   <option value="gdansk.php">Gdańsk</option>
   </select>
   <br>
   <input type="submit" value="ZNAJDŹ"  class="klik">
   <p class="podaj">Nie wybrano dealera</p>
</form>
<img src="dealer.png" id="mapa2">
<p class="dealerop" >TO JUZ OSTATNI KROK<br>DO NOWEGO PROGENA<BR>WYBIERZ DEALERA</p>
</div>';
}
else 
{  
include $miasto;  
}
?> 
       
    </div>
    <div class="footer_login">
        <br>
        <p class="p1">&copy; Copyright 2020 Progen Cars</p>
        <p class="p2">Kamil Sagan</p>
    </div>
</body>
</html>