<?php
/*********************************************
* plik formularz.php
*********************************************/

$imie = trim($_POST['imie']);
$nazwisko = trim($_POST['nazwisko']);
$telefon = trim($_POST['telefon']);
$data = trim($_POST['data']);
$model = trim($_POST['model']);
$zgoda = trim($_POST['zgoda']);

if(empty($imie) || empty($nazwisko)  || empty($telefon)   || empty($data)  || empty($model)  || empty($zgoda)) {
    
// prosty formularz zawierający dwa pola
echo "nie dziala";
}
else {
    
    // dane pochodzące z formularza
    $dane = $imie.",".$nazwisko.",".$telefon.",".$data.",".$model.",".$zgoda."\n";
    // przypisanie zmniennej $file nazwy pliku
    $file = "jazda-probna.txt";
    // uchwyt pliku, otwarcie do dopisania
    $fp = fopen($file, "a");
    // zapisanie danych do pliku
    fwrite($fp, $dane);
    // zamknięcie pliku
    fclose($fp);

    echo "dziala";
    
    
}

?> 