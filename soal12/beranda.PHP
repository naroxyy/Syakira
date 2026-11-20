<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Beranda</title>
</head>
<body>

<h2>SELAMAT DATANG!</h2>

<h3>
Halo, <?php echo htmlspecialchars($_SESSION['nama']); ?>
</h3>
<img src="foto.webp" width="300" height="200">

<p>Login berhasil. Selamat datang di halaman beranda.</p>

<a href="logout.php"><button>Logout</button></a>

</body>
</html>