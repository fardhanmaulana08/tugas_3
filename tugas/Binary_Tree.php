<?php
class TreeNode {
    public $data;
    public $left;
    public $right;

    public function __construct($data) {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}

$root = new TreeNode(1);
$root->left = new TreeNode(2);
$root->right = new TreeNode(3);

echo "Isi Binary Tree (Root, Left, Right): ";
echo $root->data . " " . $root->left->data . " " . $root->right->data . "\n";
?>