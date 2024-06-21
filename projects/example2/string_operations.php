<?php
function validate_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function string_length($string) {
    return strlen($string);
}

function reverse_string($string) {
    return strrev($string);
}

function search_word($string, $word) {
    $position = strpos($string, $word);
    return $position !== false ? "Bulundu (Konum: $position)" : "Bulunamadı";
}

function to_uppercase($string) {
    return strtoupper($string);
}

function to_lowercase($string) {
    return strtolower($string);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputString = validate_input($_POST['inputString']);

    $length = string_length($inputString);
    $reversedString = reverse_string($inputString);
    $searchWord = "PHP";
    $wordFound = search_word($inputString, $searchWord);
    $uppercaseString = to_uppercase($inputString);
    $lowercaseString = to_lowercase($inputString);

    echo "<h2>Sonuçlar:</h2>";
    echo "<p>Girilen Metin: $inputString</p>";
    echo "<p>Metnin Uzunluğu: $length</p>";
    echo "<p>Ters Çevrilmiş Metin: $reversedString</p>";
    echo "<p>'$searchWord' Kelimesi: $wordFound</p>";
    echo "<p>Büyük Harfe Çevrilmiş Metin: $uppercaseString</p>";
    echo "<p>Küçük Harfe Çevrilmiş Metin: $lowercaseString</p>";
}
?>