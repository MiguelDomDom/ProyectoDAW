<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/login_registro.css">

    <!-- JavaScript -->
    <script src="javaScript/login_registro.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"> </script>

    <title>Login/Registro</title>

</head>
<body>
    <div class="fondo">
        <img src="/Imagenes/fondo1.jpg" alt="">
        <div class="page">
            <div class="container1">
                <div class="left">
                    <div class="login">REGISTRO</div>
                    <div class="eula"></div>
                </div>
                <div class="right">
                    <div class="form">
                        <form action="/php/validarLogin.php" method="POST">
                            <h1>LOGIN</h1>
                            <label for="Usuario">Usuario</label>
                            <input type="text" name="Usuario_login" id="Usuario_login" class="campos">
                            <label for="Contraseña">Contraseña</label>
                            <input type="password" name="Contraseña_login" id="Contraseña_login" class="campos">
                            <input type="submit" name="enviar_login" id="Enviar_login" value="Enviar" class="campo_enviar">
                        </form>
                    </div>
                </div>
            </div>
            <div class="container2">
                <div class="right">
                    <div class="form">
                        <h1>Registro</h1>
                        <label for="Nombre">Nombre</label>
                        <input type="text" id="Usuario_registro" class="campos">
                        <label for="Apellido">Apellido</label>
                        <input type="text" id="Apellido_registro" class="campos">
                        <label for="Usuario">Usuario</label>
                        <input type="text" id="Usuario_registro" class="campos">
                        <label for="Contraseña">Contraseña</label>
                        <input type="password" id="Contraseña_registro" class="campos">
                        <label for="Contraseña2">Repita Contraseña</label>
                        <input type="password" id="Contraseña2_registro" class="campos">
                        <label for="Email">Email</label>
                        <input type="email" id="email_registro" class="campos">
                        <input type="submit" id="Enviar_login" value="Enviar" class="campo_enviar">
                    </div>
                </div>
                <div class="left">
                    <div class="login">LOGIN</div>
                    <div class="eula"></div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>