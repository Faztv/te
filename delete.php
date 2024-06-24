<?php
include 'conectar.php';

$id_usuario = $_GET['id'];

$sql = "DELETE FROM usuario WHERE id=$id_usuario";

if ($conn->query($sql) === TRUE) {
    echo "Registro eliminado correctamente";
} else {
    echo "Error al eliminar el registro: " . $conn->error;
}

header("Location: mostrar.php");
exit();


$conn->close();
?>