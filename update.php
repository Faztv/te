<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
</head>
<body>
    <h2>Editar Usuario</h2>

    <?php
    // Incluir archivo de conexión
    include 'conectar.php';

    // Obtener el ID del usuario a editar
    $id_usuario = $_GET['id'];

    // Obtener los datos del usuario seleccionado
    $sql = "SELECT * FROM usuario WHERE id=$id_usuario";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Mostrar formulario para editar
        $row = $result->fetch_assoc();
        ?>
        <form action="updatebd.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>" required><br><br>
            
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" value="<?php echo $row['edad']; ?>" required><br><br>
            
            <input type="submit" value="Actualizar Usuario">
        </form>
        <?php
    } else {
        echo "Usuario no encontrado";
    }
    ?>

    <br>
    <a href="mostrar.php">Volver a la lista de usuarios</a>
</body>
</html>