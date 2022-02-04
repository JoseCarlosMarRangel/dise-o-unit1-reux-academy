<!--
<?php
$bd = 'prueba';
$servidor = 'localhost';
$usuario = 'root';
$contrasena = '';

//*Creamos la conexión a la base de datos
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $bd);

//* Checamos la conexión
if (!$conexion) {
	die('Conexión a la base de datos ' . $bd . ' fallida: ' . mysqli_connect_error());
} else {
	echo 'Conexión a la base de datos ' . $bd . ' exitosa';
}

$consulta = "select id, usuario,rol from usuarios";

$registros = mysqli_query($conexion, $consulta);
var_dump($registros->num_rows > 0);
if ($registros) {
	while ($fila = $registros->fetch_assoc()) {
		echo "id " . $fila["id"] . " usuario " . $fila["usuario"] . " rol " . $fila["rol"] . "<br>";
	}
} else {
	die("Error: " . mysqli_error($conexion));
}

mysqli_close($conexion);
?>
-->

<?php

$bd = 'prueba';
$servidor = 'localhost';
$usuario = 'root';
$contrasena = '';

$conexion = mysqli_connect($servidor, $usuario, $contrasena, $bd);

?>


<!DOCTYPE html>
<html>

<head>
	<title>mostrar datos</title>
</head>

<body>

	<h1>Tabla de Usuarioss</h1>

	<br>

	<table border="1">
		<tr>
			<td>id</td>
			<td>usuario</td>
			<td>rol</td>
		</tr>

		<?php
		$sql = "select id, usuario,rol from usuarios";
		$result = mysqli_query($conexion, $sql);

		while ($mostrar = mysqli_fetch_array($result)) {
		?>

			<tr>
				<td><?php echo $mostrar['id'] ?></td>
				<td><?php echo $mostrar['usuario'] ?></td>
				<td><?php echo $mostrar['rol'] ?></td>
			</tr>
		<?php
		}
		?>
	</table>
<br/>
	<button onclick="location.href='index.php'">REGRESAR</button>

</body>

</html>