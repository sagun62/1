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
  echo "nie dziala";
  exit();
}
if(checkPass($_POST["user"], $_POST["haslo"])){
    echo " dziala";
}
else{
    echo "nie dziala";
}
?>
