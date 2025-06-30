<?php
session_start();

require_once __DIR__ . '/../models/model_gestionCart.php';
require_once __DIR__ . '/../../Public/db.php';

$gestion = new Gestion();


if(isset($_POST['restar'])){
    $id = $_POST['id'];
    $resta = $gestion->Restar($id);
    if($resta == 0){
        $eliminar = $gestion->Eliminar($id);
    }
    $disminuir = $gestion->Disminuir($id, $resta);
    header('Location: controller_cart.php');
}

if(isset($_POST['sumar'])){
    $id = $_POST['id'];
    $suma = $gestion->Sumar($id);
    $maximo = $gestion->Maximo($id);
    if($suma <= $maximo){
        $aumentar = $gestion->Aumentar($id, $suma);
    }
    header('Location: controller_cart.php');
}

if(isset($_POST['eliminar'])){
    $id = $_POST['id'];
    $eliminar = $gestion->Eliminar($id);
    header('Location: controller_cart.php');
}

if(isset($_POST['eliminarTodo'])){
    $id = $_POST['id'];
    $eliminar_todo = $gestion->EliminarTodo($id);
    header('Location: controller_cart.php');
}

if(isset($_POST['orden'])){
    $username = $_POST['usuario'];
    $productos = json_decode($_POST['productos'], true);
    $cantidad = json_decode($_POST['cantidad'], true);
    if(json_last_error() !== JSON_ERROR_NONE) {
        die("JSON inválido");
    }
    if(!is_numeric($_POST['total'])) die("Total inválido");
    $total = $_POST['total'];
    $usuario = $gestion->getUserId($username);
    if($usuario != -1){
        $orden = $gestion->InsertarOrden($usuario, $total);
        if($orden != -1){
            $gestion->InsertarOrdenDetalles($orden, $productos, $cantidad);
            $gestion->EliminarTodo($usuario);
            // Guardar flag y datos para mostrar alert y abrir WhatsApp en el index
            $numero = "584262498651"; // Cambia por tu número de WhatsApp
            $mensaje = "¡Hola! Quiero confirmar mi compra:%0A";
            $mensaje .= "Usuario: $username%0A";
            $mensaje .= "Productos:%0A";
            foreach($productos as $i => $prod){
                $cant = isset($cantidad[$i]) ? $cantidad[$i] : 1;
                $mensaje .= "- $prod x $cant%0A";
            }
            $mensaje .= "Total: $total";
            $_SESSION['compra_en_proceso'] = true;
            $_SESSION['wa_numero'] = $numero;
            $_SESSION['wa_mensaje'] = $mensaje;
            header('Location: controller_index.php');
            exit;
        }
    }
    $_SESSION['success'] = 'Compra realizada correctamente';
}


?>