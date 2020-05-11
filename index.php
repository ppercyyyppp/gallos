<?php 
	include_once 'conexion.php';
	$sentencia_select=$con->prepare('SELECT * FROM gallo ORDER BY id DESC');
	$sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();


 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Crud</title>
	<link rel="stylesheet" href="css/estilo.css">
</head>
<body>
	<div class="contenedor">
		<h2>Relación de gallos</h2>
		<div class="barra__buscador">
			<form action="" class="formulario" method="post">
				<input type="text" name="buscar" placeholder="buscar por placa" class="input__text">
				<input type="submit" name="btn_buscar" class="btn" value="Buscar">
				<a href="insert.php" class="btn btn__nuevo">Nuevo</a>
			</form>
		</div>
		<table>
			<tr class="head">
				<td>N°Placa</td>
				<td>Nombre</td>
				<td>Fecha Nac.</td>
				<td>Sexo</td>
				<td>Placa Papá</td>
				<td>N°Papá</td>
				<td>Placa Mamá</td>
				<td>N°Mamá</td>
				<td>Obs.</td>
				<td>Foto</td>
				<td>Estado</td>
				<td>Linea</td>
				<td colspan="2">Acción</td>
			</tr>
			<?php foreach($resultado as $fila):?>
				<tr>
					<td><?php echo $fila['nplaca']; ?></td>
					<td><?php echo $fila['nombre']; ?></td>
					<td><?php echo $fila['fecha']; ?></td>
					<td><?php echo $fila['sexo']; ?></td>
					<td><?php echo $fila['nplacapapa']; ?></td>
					<td><?php echo $fila['nombrepapa']; ?></td>
					<td><?php echo $fila['nplacamama']; ?></td>
					<td><?php echo $fila['nombremama']; ?></td>
					<td><?php echo $fila['observaciones']; ?></td>
					<td><?php echo $fila['foto']; ?></td>
					<td><?php echo $fila['estado']; ?></td>
					<td><?php echo $fila['linea']; ?></td>
					<td><a href="update.php?id=<?php echo $fila['id']; ?>" class="btn__update">Editar</a></td>
				</tr>
			<?php endforeach ?>
		</table>
	</div>
</body>
</html>