<form method="POST">
    Nama: <input type="text" name="nama">
    <button type="submit">Kirim</button>
</form>

<?php
if (isset($_POST['nama'])) {
    if (empty($_POST['nama'])) {
        echo "Nama belum diisi";
    } else {
        echo "Nama: " . htmlspecialchars($_POST['nama']);
    }
}
?>