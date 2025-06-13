<?php
class Cart {
    public function __construct() {
        if (!isset($_SESSION['carrito'])) {
            $_SESSION['carrito'] = [];
            $_SESSION['numProducts'] = 0;
        }
    }

    public function addProduct($productId) {
        $_SESSION['carrito'][] = $productId;
        $_SESSION['numProducts']++;
    }

    public function getNumProducts() {
        return $_SESSION['numProducts'];
    }

    public function getProducts() {
        return $_SESSION['carrito'];
    }

    
}
