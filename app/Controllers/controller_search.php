<?php
session_start();
require_once __DIR__ . '/../models/model_search.php';
require_once __DIR__ . '/../../Public/db.php';

if(isset($_POST['search'])){
    $text = $_POST['text'];

    $search = new Search();
    $search->searchProducts($text);
}


require_once '../views/view_search.php';
?>
