<?php
require_once __DIR__ . '/../models/model_search.php';
require_once __DIR__ . '/../../Public/db.php';

if(isset($_POST['search'])){
    $searchInput = $_POST['search'];

    $search = new Search();
    $products = $search->search($searchInput);
}


require_once '../views/view_buscar.php';
?>
