<?php
require 'conexion_be.php';

if(isset($_POST["action"])){
    if($_POST["action"] == "insert"){
        insert();
    }

    else if ($_POST["action"] == "edit"){
        edit();
    }
    else{
        delete();
    }
}

function insert() {
    global $conn;

    $nombre = mysqli_real_escape_string($conn, $_POST["nombre"]);
    $puesto = mysqli_real_escape_string($conn, $_POST["puesto"]);
    $edad = mysqli_real_escape_string($conn, $_POST["edad"]);
    $telefono = mysqli_real_escape_string($conn, $_POST["telefono"]);

    // Consulta SQL preparada para insertar los datos en la tabla
    $query = "INSERT INTO empleados (nombre, puesto, edad, telefono) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssis", $nombre, $puesto, $edad, $telefono);
    mysqli_stmt_execute($stmt);

    if(mysqli_stmt_affected_rows($stmt) > 0) {
        echo "Inserted Successfully";
    } else {
        echo "Error al insertar los datos: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
}

function edit(){
    global $conn;

    // Validar y limpiar los datos recibidos del formulario
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $nombre = mysqli_real_escape_string($conn, $_POST["nombre"]);
    $puesto = mysqli_real_escape_string($conn, $_POST["puesto"]);
    $edad = mysqli_real_escape_string($conn, $_POST["edad"]);
    $telefono = mysqli_real_escape_string($conn, $_POST["telefono"]);

    // Actualizar los datos en la base de datos
    $query = "UPDATE empleados SET nombre = '$nombre', puesto = '$puesto', edad = '$edad', telefono = '$telefono' WHERE id = $id";
    $result = mysqli_query($conn, $query);

    // Verificar si la consulta se ejecutó con éxito
    if($result) {
        echo "Update Successfully";
    } else {
        echo "Error al actualizar los datos: " . mysqli_error($conn);
    }
}

function delete(){
    global $conn;

    $id = $_POST["action"];

    $query = "DELETE FROM empleados WHERE id = $id";
    mysqli_query($conn, $query);
    echo "Delete Successfully";
}


?>