<?php
session_start();

if (isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $konfirmasi = $_POST['konfirmasi'];

    if ($password == $konfirmasi) {

        $_SESSION['nama'] = $nama;
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        echo "<script>
        alert('Registrasi Berhasil!');
        window.location='login.php';
        </script>";

    } else {
        echo "<script>
        alert('Password tidak cocok!');
        </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Registrasi</title>
</head>
<body>

<h2>FORM REGISTRASI</h2>

<form method="POST">
    Nama:
    <input type="text" name="nama" required>
    <br><br>

    Username / Email:
    <input type="text" name="username" required>
    <br><br>

    Password:
    <input type="password" name="password" required>
    <br><br>

    Konfirmasi Password:
    <input type="password" name="konfirmasi" required>
    <br><br>

    <button type="submit" name="daftar">DAFTAR</button>
    <button type="reset">BATAL</button>
</form>

</body>
</html>