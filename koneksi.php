<?php

session_start();

$host = "localhost";
$user = "root";
$password = "";         //default XAMPP: password kosong
$db = "db_crud";

$koneksi = mysqli_connect($host, $user, $password, $db);
if (!$koneksi) {
    die("koneksi gagal: " . mysqli_connect_error());
}
mysqli_set_charset($koneksi, "utf8mb4");

// Daftar pilihan jurusan untuk form
$daftar_jurusan = [
    "Teknik Informatika",
    "Sistem Informasi",
    "Teknik Elektro",
    "Manajemen",
    "Akuntansi",
    "Kimia Industri",
    "Teknik Rekayasa Perangkat Lunak",
    "Teknik Engineering",
    "Hukum",
    "Kedokteran",
    "FSRD (Seni Rupa, Kriya, Desain Interior, DKV, Desain Produk)",
    "SAPPK (Arsitektur, Perencanaan Wilayah & Kota)",
    "SITH (Biologi, Mikrobiologi, Rekayasa Hayati/Pertanian/Kehutanan, Teknologi Pascapanen)",
    "Teknik Farmasi",
];

// Fungsi batu: cegah XSS saat menampilkan data 
function e($teks) {
    return htmlspecialchars($teks ?? '', ENT_QUOTES, 'UTF-8');
}