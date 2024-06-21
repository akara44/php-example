<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesyonel Matematik Hesap Makinesi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .calculator {
            background: #fff;
            padding: 60px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .calculator h1 {
            margin: 0 0 20px;
            text-align: center;
        }
        .calculator label {
            display: block;
            margin-bottom: 5px;
        }
        .calculator input, .calculator select, .calculator button {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .calculator button {
            background: #007BFF;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .calculator button:hover {
            background: #0056b3;
        }
        .result {
            text-align: center;
            font-size: 1.2em;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h1>Matematik Hesap Makinesi</h1>
        <form action="calculator.php" method="post">
            <label for="number1">Birinci Sayı:</label>
            <input type="number" id="number1" name="number1" required>
            <label for="number2">İkinci Sayı:</label>
            <input type="number" id="number2" name="number2" required>
            <label for="operation">İşlem:</label>
            <select id="operation" name="operation">
                <option value="add">Toplama</option>
                <option value="subtract">Çıkarma</option>
                <option value="multiply">Çarpma</option>
                <option value="divide">Bölme</option>
                <option value="sqrt1">Birinci Sayının Karekökü</option>
                <option value="sqrt2">İkinci Sayının Karekökü</option>
                <option value="power">Üs Alma (Birinci Sayı Üzeri İkinci Sayı)</option>
            </select>
            <button type="submit">Hesapla</button>
        </form>
        <?php if (isset($_GET['result'])): ?>
            <div class="result">
                <strong>Sonuç:</strong> <?php echo htmlspecialchars($_GET['result']); ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>