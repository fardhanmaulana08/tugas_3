<?php
$angka = [10, 20, 30, 40, 50];

echo "Isi Array: " . implode(", ", $angka) . "\n";

$total = array_sum($angka);
$rataRata = $total / count($angka);

echo "Total: $total\n";
echo "Rata-rata: $rataRata\n";
?>