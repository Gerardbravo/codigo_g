<?php

$nombre = $apellidos = $telefono = $mensajes = null;

if(!isset($_SESSION['data'])){
	$_SESSION['data'] = [];
}

if($_POST){
    if( $_POST['nombre'] and $_POST['apellidos'] and $_POST['telefono'] ) { 
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $telefono = $_POST['telefono'];

        $_SESSION['data'][] = [
        	'nombre' => $nombre,
        	'apellidos' => $apellidos,
        	'telefono' => $telefono,
        ];
        } else {
        	$mensajes = "Nombre, apellidos y teléfono obligatorios";
        }
     }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form class="formularios" action="#" method="post">
	<h1 class="form_tittle">DATOS PERSONALES</h1>
	<input class="form_input" type="text" name="nombre" placeholder="Ingresa tu nombre">
	<input class="form_input" type="text" name="apellidos" placeholder="Ingresa tus apellidos">
	<input class="form_input" type="text" name="telefono" placeholder="Ingresa tu número de teléfono">
	<span><?=$mensajes?></span>
	<input  class="form_submit" type="submit" name="Submit">
</form>

<table>
	<tr>
		<th>Nombre</th>
		<th>Apellidos</th>
		<th>Teléfono</th>
	</tr>

	<?php foreach($_SESSION['data'] as $item): ?>

		<tr>
			<td><?= $item['nombre'] ?></td>
			<td><?= $item['apellidos'] ?></td>
			<td><?= $item['telefono'] ?></td>
		</tr>
	<?php endforeach; ?>
</table>	
</body>
</html>

