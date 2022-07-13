<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/sesion.css">

    <!-- JAVASCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"> </script>
    <script src="javaScript/menu.js"></script>
    <script src="javaScript/popUpSesion.js"></script>
    
    <!-- ICONOS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <title>Document</title>
</head>
<body>
    <div class="contenedor">
        
            <div class="menu">
                <div class="logo_contenido">
                    <div class="logo">
                        <i class='bx bx-ghost bx-tada' ></i>
                        <i class='bx bx-game' ></i>
                        <div class="nombre_logo">RetroStar</div>
                        <i class='bx bx-game bx-flip-horizontal' ></i>
                        <i class='bx bx-ghost bx-tada' ></i>
                    </div>
                    <i class='bx bx-menu'id='btn_menu'></i>
                </div>
                <li>
                    <a href="#">
                        <div>
                            <div class="lupa">
                                <i class='bx bx-search-alt-2' ></i>
                            </div>
                            <input type="text" placeholder="Busqueda...">
                        </div>
                        
                    </a>
                    <span class="tooltip">Busqueda</span>
                </li>
                <li id="home">
                    <a href="#">
                        <i class='bx bx-home'></i>
                        <span class="nombres">Inicio</span>
                    </a>
                    <span class="tooltip">Inicio</span>
                </li>
                <li id="biblioteca">
                    <a href="#">
                        <i class='bx bx-book' ></i>
                        <span class="nombres">Mi Biblioteca</span>
                    </a>
                    <span class="tooltip">Mi Biblioteca</span>
                </li>
                <li id="deseos">
                    <a href="#">
                        <i class='bx bx-file' ></i>
                        <span class="nombres">Lista de deseos</span>
                    </a>
                    <span class="tooltip">Lista de deseos</span>
                </li>
                <li id="amigos">
                    <a href="#">
                        <i class='bx bx-group' ></i>
                        <span class="nombres">Amigos</span>
                    </a>
                    <span class="tooltip">Amigos</span>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-user'></i>
                        <span class="nombres">Usuario</span>
                    </a>
                    <span class="tooltip">Usuario</span>
                </li>
                <div class="contenido_perfil">
                    <div class="perfil">
                        <div class="detalles_perfil">
                            <img src="/Imagenes/user.png" alt="">
                            <div class="name_job">
                                <div class="name">Usuario</div>
                            </div>
                            <div class="btn_sesion">
                                <input type="button" class="btn_sesion1" value="Iniciar Sesion">
                                <input type="button" class="btn_sesion2" value="Cerrar Sesion">
                            </div>
                        </div>
                        <i class='bx bx-expand-vertical' id="log_out"></i>
                    </div>
                </div>
            </div>
        <div class="subcontenedor2">
            
        </div>
    </div>
    
</body>
</html>