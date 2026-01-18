<?php
class Node {
    public $data;
    public $next;

    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}

$head = new Node(10);
$second = new Node(20);
$third = new Node(30);

$head->next = $second;
$second->next = $third;

echo "Isi Linked List: ";
$temp = $head;
while ($temp != null) {
    echo $temp->data . " -> ";
    $temp = $temp->next;
}
echo "NULL\n";
?>