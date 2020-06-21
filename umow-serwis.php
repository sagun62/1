<?php
/*********************************************
* plik formularz.php
*********************************************/

$imie = trim($_POST['imie']);
$nazwisko = trim($_POST['nazwisko']);
$telefon = trim($_POST['telefon']);
$numer = trim($_POST['numer']);
$data = trim($_POST['data']);
$opis = trim($_POST['opis']);
$zgoda = trim($_POST['zgoda']);

if(empty($imie) || empty($nazwisko)  || empty($telefon)  || empty($numer)  || empty($data)  || empty($opis)  || empty($zgoda)) {
    
// prosty formularz zawierający dwa pola
echo "nie dziala";
}
else {
    
    // dane pochodzące z formularza
    $dane = $imie.",".$nazwisko.",".$telefon.",".$numer.",".$data.",".$opis.",".$zgoda."\n";
    // przypisanie zmniennej $file nazwy pliku
    $file = "serwis.txt";
    // uchwyt pliku, otwarcie do dopisania
    $fp = fopen($file, "a");
    // zapisanie danych do pliku
    fwrite($fp, $dane);
    // zamknięcie pliku
    fclose($fp);

    echo "dziala";
    
    
}

?> 