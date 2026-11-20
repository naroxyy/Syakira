
<!DOCTYPE html>
<html>
<head>
    <title>Menghitung Jari-jari</title>
</head>
<body>

<h2>Menghitung Jari-jari Lingkaran</h2>

<form method="POST">
    Masukkan Luas Lingkaran:
    <input type="number" name="luas" required>
    <button type="submit">Hitung</button>
</form>

<?php
if (isset($_POST['luas'])) {
    $luas = $_POST['luas'];

    $r = sqrt($luas / 3.14);

    echo "Jari-jari lingkaran adalah: " . $r;
}
?>

</body>
</html>
