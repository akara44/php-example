<?php
function calculate($number1, $number2, $operation) {
    switch ($operation) {
        case "add":
            return $number1 + $number2;
        case "subtract":
            return $number1 - $number2;
        case "multiply":
            return $number1 * $number2;
        case "divide":
            return $number2 != 0 ? $number1 / $number2 : 'Hata: 0\'a bölme';
        case "sqrt1":
            return sqrt($number1);
        case "sqrt2":
            return sqrt($number2);
        case "power":
            return pow($number1, $number2);
        default:
            return 'Geçersiz işlem';
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operation = $_POST['operation'];
    $result = calculate($number1, $number2, $operation);
    header("Location: index.php?result=" . urlencode($result));
    exit();
}
?>
