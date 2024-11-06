<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjumlahan Dua Bilangan</title>
</head>
<body>
    <h1>Penjumlahan Dua Bilangan</h1>
    <form action="index.php" method="post">
        <label for="bilangan1">Bilangan Pertama:</label>
        <input type="number" id="bilangan1" name="bilangan1" required>
        <br>
        <label for="bilangan2">Bilangan Kedua:</label>
        <input type="number" id="bilangan2" name="bilangan2" required>
        <br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $bilangan1 = $_POST['bilangan1'];
        $bilangan2 = $_POST['bilangan2'];
        $hasil = $bilangan1 + $bilangan2;
        echo "<h2>Hasil: $bilangan1 + $bilangan2 = $hasil</h2>";
    }
    ?>
</body>
</html>
