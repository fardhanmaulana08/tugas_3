<?php
$queue = [];

// Menambahkan data
array_push($queue, "A");
array_push($queue, "B");
array_push($queue, "C");

// Menghapus data paling depan (A)
array_shift($queue);

echo "Isi Queue: ";
foreach ($queue as $item) {
    echo $item . " ";
}
echo "\n";
?>