


<?php
    session_start();

    $nombre_completo = $_SESSION ['usuario'];

    if(!isset($_SESSION['usuario'])){ //!isset = si no existe la session 
        echo'
        <script>
            alert ("NECESITAS INICIAR SESIÓN PARA ACCEDER")
            window.location = "index.php"
        </script>
        ';
        //header("location: index.php"); //redirigir a index(sin ninguna alerta)
        session_destroy();
        die(); //codigo de abajo no se ejecute
        
    }
    
    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Principal</title>
    
    <style>
        /* Estilos para el menú */
        ul.menu {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #E0FFFF;
            text-align: right;
        }

        ul.menu li {
            display: inline-block;
        }

        ul.menu li a {
            display: block;
            color: #333;
            padding: 24px 16px;
            text-decoration: none;
        }

        ul.menu li a:hover {
            background-color:#B0C4DE;
        }

        ul.menu .logo {
        
            float: left;
            margin-right: 10px;
        }

        ul.menu img{
            width: 54px; /* Define el ancho de la imagen */
            height: auto;
        }
    </style>
</head>
<body>
 
<ul class="menu">
    <li><a href="php/agregar.php">Agregar</a></li>
    <li>Bienvenido <?php echo "$nombre_completo"; ?></li>
    <li><a href="php/cerrar_sesion.php">Cerrar Sesion</a></li>
    <li class="logo"><img src="../img/logo2.png"></li>
</ul>

</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>MC</title>
    
    <link rel="stylesheet" href="diseños/EstilosEmpresa.css">
    <script src="diseños/scripBase.js"></script>
    
</head>
<body style="background-color:#CCC;">
<br><br>
<div class="campoBusquedaPrincipal">
    <input type="text" value="" placeholder="Busqueda"/>
    <img src="diseños/search.png"  />
    </div>
    <?php require 'tab/script.php';?>

    <div>
        <div id="usuario">
        <img src="imgs/person.png"/>
        </div>
        <div id="proyectos"></div>
        <img src="imgs/admin.png"/>
        <div id="reportes">
        <img src="imgs/report.png"/>
        </div>
        <div id="asignacion">
        <img src="imgs/person.png"/>
        </div>

    </div>
</body>
</html>


