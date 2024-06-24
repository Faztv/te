<?php
include 'conectar.php';

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];

if (strlen($edad) == 0) {
    echo "<br><br><center><h1>Debe ingresar un numero.</h1></center>";
    exit;
}

if (!is_numeric($edad)) {
    echo "<br><br><center><h1>El valor ingresado no es numero.</h1></center>";
    exit;
}

if (strlen($edad) < 2) {
    echo "<br><br><center><h1>La edad debe tener al menos 2 caracteres.</h1></center>";
    exit;
}


$sql = "INSERT INTO usuario (nombre, edad) VALUES ('$nombre', '$edad')";
$resul = mysqli_query($conn,$sql);


if (!$resul) {
    echo "no registro  correctamente";
} else {
    echo "registro";
}

mysqli_close($conn);
?>