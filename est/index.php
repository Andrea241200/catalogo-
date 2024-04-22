<?php
    session_start();

    if(isset($_SESSION['usuarios'])){
        header("location: bienvenido.php");
    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>Accede con tu cuenta </h3>
                    <p> Inicia sesion para acceder</p>
                    <button id="btn_iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>Crea una cuenta nueva</h3>
                    <p> Registrate para acceder</p>
                    <button id="btn_registrarse"> Registrarse</button>
                </div>
            </div>
            <div class="contenedor__login-register">

                <form action="php/login_usuario_mc.php"  method="POST" class="formulario__login">
                    <h2> Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo electronico o nombre" name="correo">
                    <input type="password" placeholder="Contraseña" name="password">
                    <button>Acceder</button>
                </form>

                <form action="php/registro_usuario_mc.php" method="POST" class="formulario__register">
                    <h2> Registrarse</h2>
                    <input type="text" placeholder="Nombre" name="nombre_completo">
                    <input type="text" placeholder="Correo" name="correo">
                    <input type="password" placeholder="Contraseña" name="password">
                    <button>Registrarse</button>
                </form>
                
               
            </div>
        </div>
    </main>
<script src="js/script.js"></script>
</body>
</html>