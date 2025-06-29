<?php
    /* require __DIR__ . '/../../Public/templates/head.php'; */
    require_once __DIR__ . '/../models/model_product.php';
    require_once __DIR__ . '/../../Public/db.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $productModel = new Product();
        $product = $productModel->getByID($id); 
    }

    require_once  '../views/view_product.php';
?>