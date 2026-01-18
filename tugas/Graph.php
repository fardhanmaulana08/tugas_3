<?php
$graph = [
    "A" => ["B", "C"],
    "B" => [],
    "C" => []
];

foreach ($graph as $node => $neighbors) {
    echo "Node $node terhubung ke: " . implode(", ", $neighbors) . "\n";
}
?>