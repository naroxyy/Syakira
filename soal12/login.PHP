<?php
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (
        isset($_SESSION['username']) &&
        $username == $_SESSION['username'] &&
        $password == $_SESSION['password']
    ) {
        $_SESSION['login'] = true;

        header("Location: beranda.php");
        exit;
    } else {
        $pesan = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Login</title>
</head>
<body>

<h2>FORM LOGIN</h2>

<form method="POST">
    Username / Email:
    <input type="text" name="username" required>
    <br><br>

    Password:
    <input type="password" name="password" required>
    <br><br>

    <button type="submit" name="login">LOGIN</button>
    <button type="reset">BATAL</button>
</form>

<?php
if (isset($pesan)) {
    echo "<h3>$pesan</h3>";
}
?>

</body>
</html>