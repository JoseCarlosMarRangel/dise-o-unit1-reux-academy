<?php require 'login/abrir_session.php'?>

<?php 
    require 'login/conexion.php';
    $datos = retornar_datos_usuario($usuario,$contrasena, $conexion);
    echo "<h1>" .$datos . "</h1>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Falso</title>
</head>
<body>
    <h1>Index Falso</h1>
</body>
</html>