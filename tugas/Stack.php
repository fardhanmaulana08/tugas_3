<?php
$stack = [];

// Menambahkan data
array_push($stack, 10);
array_push($stack, 20);
array_push($stack, 30);

// Menghapus data teratas (30)
array_pop($stack);

echo "Isi Stack (teratas terakhir): ";
print_r($stack);
?>