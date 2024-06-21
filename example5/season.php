<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mevsim Bulucu Sonuç</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mb-4">Mevsim Bulucu Sonuç</h2>
        <?php
        // Formdan gelen ay ismini alalım
        $month = $_POST['month'];

        // Küçük harfe çevirerek karşılaştırma yapalım
        $month_lower = strtolower($month);

        // Switch case kullanarak mevsim bulma
        switch ($month_lower) {
            case 'aralık':
            case 'ocak':
            case 'şubat':
                $season = 'Kış';
                break;
            case 'mart':
            case 'nisan':
            case 'mayıs':
                $season = 'İlkbahar';
                break;
            case 'haziran':
            case 'temmuz':
            case 'ağustos':
                $season = 'Yaz';
                break;
            case 'eylül':
            case 'ekim':
            case 'kasım':
                $season = 'Sonbahar';
                break;
            default:
                $season = 'Böyle bir ay bulunmamaktadır.';
                break;
        }

        // Sonucu ekrana yazdıralım
        echo '<div class="alert alert-info" role="alert">';
        echo "<strong>$month</strong> mevsimi: <strong>$season</strong>";
        echo '</div>';
        ?>
    </div>

    <!-- Bootstrap JS ve jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>