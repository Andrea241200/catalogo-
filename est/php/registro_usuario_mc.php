<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    //CONTRASEÑA
    $password = hash('sha512', $password); 

    $query = "INSERT INTO usuarios(nombre_completo, correo, password) 
    VALUES('$nombre_completo', '$correo', '$password')";

    

    //CORREO QUE NO SE REPITA EN LA BD

    $validar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");
    if(mysqli_num_rows($validar_correo) > 0){
        echo'
        <script>
            alert("CORREO YA REGISTRADO"); 
            window.location = "../index.php";
        </script>
        ';
        exit(); //TERMINA EL SCRIPT ASÍ NO SE GUARDARÁ EN LA BD 
    } 

    

    $ejecutar = mysqli_query($conexion, $query); 

    if($ejecutar){
        echo'
        <script>
            alert("Usuario registrado");
            window.location = "../index.php";
        </script>
        ';
    } else{
        echo'
        <script>
            alert("Intente de nuevo, usuario no registrado");
            window.location = "../index.php";
        </script>
        ';
    }

    mysqli_close($conexion);


?>