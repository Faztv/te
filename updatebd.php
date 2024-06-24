<?php

include 'conectar.php';

$id_usuario = $_POST['id'];
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];


$sql = "UPDATE usuario SET nombre='$nombre', edad=$edad WHERE id=$id_usuario";

if ($conn->query($sql) === TRUE) {
    echo "Registro actualizado correctamente";
} else {
    echo "Error al actualizar el registro: " . $conn->error;
}


header("Location: mostrar.php");
exit();

$conn->close();


/*
<?php 
$host = "localhost";
$user = "root";
$password = "123";
$dbname = "azregistro";

$conn = mysqli_connect($host, $user, $password, $dbname);

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

$consulta = mysqli_query($conn, "


SELECT *
FROM usuario
WHERE LOWER(CONCAT(SUBSTRING(nombres, 1, 1), SUBSTRING(primer_apellido, 1, 1))) = '$usuario'
  AND pass = '$pass'; 

");
if ($row = mysqli_fetch_array($consulta)) {
	session_start();
	$_SESSION['id'] = $row['id'];
	?>

	<script type="text/javascript">
		window.location = "az_actividades.php";
	</script>
	<?php 
}else{

	echo("<br><br><center><h1>Usuario/Contraseña Invalido intentelo mas tarde...</h1></center>");
}
 ?>



*/ 
?>

