<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Usuario</title>
</head>
<body>
    <h2>Insertar Nuevo Usuario</h2>
    <form action="insertar.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required><br><br>
        
        <input type="submit" value="Insertar Usuario">
    </form>
</body>
</html>