<?php
/*********************************************
* plik formularz.php
*********************************************/

$user1 = trim($_POST['user1']);
$haslo1 = trim($_POST['haslo1']);

if(empty($user1) and empty($haslo1)) {
    
// prosty formularz zawierający dwa pola
echo "nie dziala";
}
else {
    
    // dane pochodzące z formularza
    $dane = $user1.":".$haslo1."\n";
    // przypisanie zmniennej $file nazwy pliku
    $file = "logowanie.txt";
    // uchwyt pliku, otwarcie do dopisania
    $fp = fopen($file, "a");
    // zapisanie danych do pliku
    fwrite($fp, $dane);
    // zamknięcie pliku
    fclose($fp);

    echo "dziala";
    
    
}

?> 