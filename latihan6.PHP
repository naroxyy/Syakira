<?php
$nilai = [
    "rafa" => 100,
    "prabowo" => 55,
    "gibran" => 65,
    "angger" => 85,
    "roy suryo" => 0
];

echo "<h1>DAFTAR NILAI SISWA</h1> <br>";
echo "<table border='1' celpadding='8'>";
echo "<tr><th>nama</th><th>nilai</th></tr>";

foreach($nilai as $nama => $angka) {
    echo "<tr><td>$nama</td><td>$angka</td></tr>";
}

echo "</table>";
$rata = array_sum($nilai) / count($nilai);
echo "Rata-rata nilai: $rata <br>";
echo "Nilai tertinggi: " . max($nilai) . "<br>";
echo "Nilai terendah: " . min($nilai) . "<br>";