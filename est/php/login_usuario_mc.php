<?php  

    session_start();

    include 'conexion_be.php';

    $correo = $_POST ['correo'];
    $password = $_POST ['password'];
    $password = hash('sha512' , $password);
    $nombre_completo = $_POST['nombre_completo'];
    
    



    //Validación
    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'
     and password='$password'");

     
    
    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $correo; 
        $_SESSION['nombre_completo'] = $nombre_completo;
        
        header("location: ../bienvenido.php");

        // Obtener el ID y el nombre completo del usuario
        $fila = mysqli_fetch_assoc($validar_login);
        $usuario = $fila['correo'];
        $nombre_completo = $fila['nombre_completo'];
        $sql_bitacora = "INSERT INTO bitacora (nombre_completo,usuario, accion, fecha_hora)
        VALUES ('$nombre_completo','$correo', 'Inicio de sesion', NOW())";
        mysqli_query($conexion, $sql_bitacora, $sql_usuarios);

        
        exit;
    }else{
        echo'
        <script>
        alert("VERIFIQUE LOS DATOS");
        window.location = "../index.php";
        </script>
        ';
        exit;
    }




?>