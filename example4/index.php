<?php
// Session başlatma
session_start();

// Kullanıcı giriş kontrolü
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "Merhaba, $username! Giriş yaptınız.";
} else {
    echo "Hoş geldiniz! Lütfen giriş yapın.";
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>PHP If-Else Projesi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <br>
    <a href="login.php">Giriş yapmak için tıklayınız</a>
</body>
</html>