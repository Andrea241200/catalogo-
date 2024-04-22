<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar empleados</title>
</head>
<body>
    <h2>Editar empleados</h2>
    <form autocomplete="off" action="" method="POST">
        <?php 
        require 'config.php';
        $id = $_GET["id"];
        $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM empleados WHERE id = $id"));
        ?>
        <input type="hidden" id="id" name="id" value="<?php echo $rows['id']; ?>">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $rows['nombre']; ?>"><br>
        <label for="puesto">Puesto</label>
        <input type="text" id="puesto" name="puesto" value="<?php echo $rows['puesto']; ?>"><br>
        <label for="edad">Edad</label>
        <input type="text" id="edad" name="edad" value="<?php echo $rows['edad']; ?>"><br>
        <label for="telefono">Teléfono</label>
        <input type="text" id="telefono" name="telefono" value="<?php echo $rows['telefono']; ?>"><br>
        <button type="submit" name="action" onclick="submitData('edit')" value="edit">Edit</button>
    </form>
    <br>
    <a href="index.php">Regresar a index</a>
    <?php require 'script.php';
    ?>

    
</body>
</html>
