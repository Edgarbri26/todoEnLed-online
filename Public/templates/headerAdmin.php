<body class="bg-white grid grid-cols-[250px_1fr] grid-rows-[auto_1fr_auto] min-h-screen"">

    <header class=" sticky bg-azul-principal shadow top-0 px-24 text-center  col-span-2">
        <div class="max-w-screen-xl mx-auto px-4 py-4 grid grid-cols-[1fr_auto_1fr] items-center">
                <!--logo-->
                <a class="flex items-center justify-start" href="/todoEnLed-online/app/Controllers/controller_index.php">
                    <!--span class="text-xs text-center text-white">TodoEnLed | Tu camino, Tu estilo</!--span-->
                    <img src="/todoEnLed-online/Public/img/logo.png" alt="Logo" class="h-10 mt-1">
                </a>


            <h1 class="text-white text-2xl font-bold text-center">
                TodoEnLed
                <span class="text-verde-principal">
                    Administrador
                </span>
            </h1>


            <div class="flex items-center justify-end space-x-4">
                <!--icono de usuario-->
                <a href="../Controllers/controller_login.php" class="">
                    <i class="fa-solid fa-user text-white text-2xl hover:text-verde-principal"></i>
                </a>
                <div class="relative">
                    <!--icono de notificaciones-->
                    <a href="/todoEnLed-online/app/Controllers/controller_adminCompras.php" class="text-gray-700 hover:text-black">
                        <i class="fa-solid fa-bell text-white text-2xl hover:text-verde-principal"></i>
                    </a>

                    <!--contador de notificaciones-->
                    <span class="absolute -top-1 -right-3 bg-verde-principal text-white text-xs w-5 h-5 flex items-center justify-center rounded-full">
                        <?php 
                        if(isset($_SESSION['numCompras'])){
                            echo ($_SESSION['numCompras']);
                        }else{
                            ?>
                            0
                            <?php
                        }
                        ?>    
                    </span>
                </div>
            </div>
        </div>
    </header>