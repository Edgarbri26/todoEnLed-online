<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" >
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/inicio.css">
    <link rel="icon" href="../assets/logo.ico">
    <title>TodoEnLed</title>
</head>
<body>
    


<?php 
include 'db.php';
if(isset($_POST['search'])){
    $search = $_POST['text'];
    $query = "SELECT * FROM products WHERE nombre = '$search'";
    $result = $conn->query($query);
        while($row = $result->fetch_assoc()) {

            echo "<div class='product-container'>
                <a id={$row['id']} href='src/php/product.php'>
                    <img class='img-product' src='{$row['img']}' alt='{$row['nombre']}'>
                </a>
                <h3 class='product-name'>{$row['nombre']}</h3>
                <p>Disponible: {$row['stock']}</p>
                <span class='cost'>$ {$row['precio']}</span>
                <button type='button' class='btn' onclick='agregarAlCarrito({$row['id']})' >
                        <span class='icon'>
                            <svg viewBox='0 0 175 80' width='40' height='40'>
                                <rect width='80' height='15' fill='#f0f0f0' rx='10'></rect>
                                <rect y='30' width='80' height='15' fill='#f0f0f0' rx='10'></rect>
                                <rect y='60' width='80' height='15' fill='#f0f0f0' rx='10'></rect>
                            </svg>
                        </span>
                        <span class='text'>Add</span>
                </button>
                </div>";
      }
    }

?>

</body>
</html>