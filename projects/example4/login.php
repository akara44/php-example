    <?php
    // Session başlatma
    session_start();

    // Kullanıcı adı ve şifre (örnek amaçlı sabit değerler)
    $valid_username = "kullanici";
    $valid_password = "sifre";

    // Form gönderilmiş mi kontrol etme
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Formdan gelen verileri al
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Kullanıcı adı ve şifreyi kontrol et
        if ($username === $valid_username && $password === $valid_password) {
            // Oturum değişkenlerini ayarla
            $_SESSION['username'] = $username;

            // Ana sayfaya yönlendir
            header("Location: index.php");
            exit;
        } else {
            echo "Hatalı kullanıcı adı veya şifre. Tekrar deneyiniz.";
        }
    }
    ?>

    <!DOCTYPE html>
    <html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP If-Else Projesi - Şık Tasarım</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <h2>Giriş Yap</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <input type="text" name="username" placeholder="Kullanıcı Adı" required>
                <input type="password" name="password" placeholder="Şifre" required>
                <input type="submit" value="Giriş Yap">
            </form>
            <p class="error">Hatalı kullanıcı adı veya şifre. Tekrar deneyiniz.</p>
            <p class="success">Başarıyla giriş yaptınız.</p>
        </div>
    </body>
    </html>