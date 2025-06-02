<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="src/css/styleLogin.css">
    <title>inicio</title>
</head>
<body>
    <form action="Para_iniciarSesion.php" method = "post">
<h1>Iniciar sesion</h1>
<div class="Input-contiene">
    <input type="text" placeholder="Nombre de usuario" name="username" required>
    <i class="fa-solid fa-user"></i>
</div>
<div class="Input-contiene">
    <input type="password" placeholder="Contraseña" name = "password" required>
<i class="fa-solid fa-lock"></i>
</div>
<div class="input-recordar">
    <label>
        <input type="checkbox"> Recordar Contraseña
        <a href="#"> Haz olvidado tu contraseña? </a>
    </label>
</div>
<button type="submit" class="btn" name="button">INICIAR SESION</button>
<div class="link-registro">
<p>¿No tienes cuenta?
<a href="#">Registrate ahora</a></p>
</div>

    </form>
</body>
</html>