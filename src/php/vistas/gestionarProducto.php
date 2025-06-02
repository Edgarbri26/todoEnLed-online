<?php
    include '../../php/db.php';
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/global.css">
    <link rel="stylesheet" href="../../css/crud.css">
    <title>Document</title>
</head>
<body>
    <todoenled-header></todoenled-header>
    <section id="new-product">
        <form action="../back/CRUD.php" method="POST" enctype="multipart/form-data" class="form">
            <p class="title">Register </p>
            <p class="message">Signup now and get full access to our app. </p>
            <label>
                <input required placeholder="" name="nombre" type="text" class="input" >
                <span>nombre</span>
            </label>
            <label>
                <input required placeholder=""  name="precio" type="number" class="input" >
                <span>Precio</span>
            </label>
            <label>
                <input required placeholder="" name="stock" type="number" class="input" >
                <span>Stock</span>
            </label>
            <label>
                <textarea name="descripcion" required></textarea>
                
                <span>Descripcion</span>
            </label>
            <label for="file" class="custum-file-upload">
<div class="icon">
</div>
<div class="text">
   <span>Click to upload image</span>
   </div>
   <input type="file" name="imagen" accept="image/*" required>
</label>


            <button  type="submit" class="submit">Submit</button>
        </form>
    </section>

    <section id="products">
        <table>
            <thead>
                <th>igm</th>
                <th>nombre</th>
                <th>precio</th>
                <th>stock</th>
                <th>descripcion</th>
                <th>Editar</th>
                <th>eliminar</th>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM products";
                    $resultado = $conn->query($sql);
                    if ($resultado->num_rows > 0) {
                        while ($row = $resultado->fetch_assoc()) {
                            echo "<tr id='{$row['id']}'>
                                    <td><img src='{$row['img']}' alt='{$row['nombre']}' width='50'></td>
                                    <td>{$row['nombre']}</td>
                                    <td>{$row['precio']}</td>
                                    <td>{$row['stock']}</td>
                                    <td>{$row['descripcion']}</td>
                                    <td><button >Editar</button></td>
                                    <td><button type='button' onclick='eliminarProducto({$row['id']})'>eliminar</button></td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>No hay productos registrados</td></tr>";
                    }
                ?>
            </tbody>
        </table>
    </section>



    <script src="../../js/compents/todoEnLed-header.js"></script>
</body>
</html>