<?php
$belanja = 200000;

if ($belanja > 100000) {
    $diskon = $belanja * 10 / 100;
} else {
    $diskon = 0;
}

$total = $belanja - $diskon;

echo "Total belanja: Rp" . number_format($belanja);
echo "<br>Diskon: Rp" . number_format($diskon);
echo "<br>Total bayar: Rp" . number_format($total);
?>