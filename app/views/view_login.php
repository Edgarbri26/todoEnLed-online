<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/todoEnLed-online/Public/css/styleLogin.css">
    <title>inicio</title>
</head>

<body>

    
    <section class="form">
        <h1 class="title">Iniciar sesion</h1>

        <form action="../app/Controllers/controller_login.php" method="post">
            
                <input type="text" class="input" placeholder="Nombre de usuario" name="username" required>
                <i class="fa-solid fa-user"></i>
            
                <input type="password" class="input" placeholder="Contraseña" name="password" required>
                <i class="fa-solid fa-lock"></i>
                <label>
                    <input type="checkbox" class="check"> Recordar Contraseña
                    <a href="#"> Haz olvidado tu contraseña? </a>
                </label>
            <button type="submit" class="btn" name="button">INICIAR SESION</button>
            <div class="link-registro">
                <p>¿No tienes cuenta?: 
                    <a href="#">Registrate ahora</a>
                </p>
            </div>

        </form>

    </section>




</body>

</html>