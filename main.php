
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
    <div class="login">
    <?PHP


function checkPass($user, $pass)
{
  if(!$fd = @fopen("logowanie.txt", "r")) return false;
  while (!feof ($fd)){
    $line = trim(fgets($fd));
    if(($pos = strpos($line, ":"))===false) continue;

    $tempUser = substr($line, 0, $pos);
    if($tempUser != $user) continue;

    $tempPass = substr($line, $pos + 1, strlen($line) - $pos);

    if($tempPass != $pass) continue;
    else{
      fclose($fd);
      return true;
    }
  }
  fclose($fd);
  return false;
}
if(!isSet($_POST["haslo"]) || !isSet($_POST["user"])){
  echo  '<div class="logowanie">
  <p class="grubo-log">LOGOWANIE</p>
      <p class="error">Błąd logowania, sprawdź login i hasło. Spróbuj ponownie</p>
         <br>
          <form name = "main.php" action = "main.php" method = "POST">
              <br> <p>Użytkownik: </p><br>
              <input type="text" name="user" class="umow">
              <br><br><p>Haslo: </p><br>
             <input type="password" name="haslo"  class="umow">
             <br>
             <br>
             <input type="submit" value="ZALOGUJ"  class="serbut">
  
          </form>
    
  </div>';
  exit();
}
if(checkPass($_POST["user"], $_POST["haslo"])){
  echo  '<div class="login">
      <p class="good">Witamy w My Progen</p>
      <a href="index.html" class="good-link">Powrót na strone głowną</a>
        </div>';
    
}
else{
   echo  '<div class="logowanie">
   <p class="grubo-log">LOGOWANIE</p>
     
          <br>
           <form name = "main.php" action = "main.php" method = "POST">
               <br> <p>Użytkownik: </p><br>
               <input type="text" name="user" class="umow">
               <br><br><p>Haslo: </p><br>
              <input type="password" name="haslo"  class="umow">
              <br>
              <br>
              <input type="submit" value="ZALOGUJ"  class="serbut">
   
           </form>
     
   </div>
   
   <div class="rejestracja">
  <p class="error">Błąd logowania, sprawdź login i hasło. Spróbuj ponownie</p>
  </div>';
}
?>



    </div>
    <div class="footer_login">

        <br>
        <p class="p1">&copy; Copyright 2020 Progen Cars</p>
        <p class="p2">Kamil Sagan</p>
    </div>