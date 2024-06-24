<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Usuarios</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Lista de Usuarios</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Acción</th>
        </tr>
        <?php
        // Incluir archivo de conexión
        include 'conectar.php';

        // Seleccionar todos los usuarios
        $sql = "SELECT * FROM usuario";
        $result = mysqli_query($conn,$sql);

        if ($result->num_rows > 0) {
            // Mostrar cada fila de resultados
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["nombre"]."</td>";
                echo "<td>".$row["edad"]."</td>";
               echo "<td><a href='delete.php?id=".$row["id"]."'>Eliminar</a></td>";
               echo "<td><a href='update.php?id=".$row["id"]."'>modificar</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>0 resultados</td></tr>";
        }
        ?>
    </table>
    <br>
    <a href="index.php">Insertar Nuevo Usuario</a>
</body>
</html>