<?php 

	include_once 'conexion.php';
	if (isset($_POST['guardar'])) {
			$placa =$_POST['placa'];
			$nombre =$_POST['nombre'];
			$fecnac =$_POST['fecnac'];
			$sexo =$_POST['sexo'];
			$nplacapapa =$_POST['nplacapapa'];
			$nombrepapa =$_POST['nombrepapa'];
			$nplacamama =$_POST['nplacamama'];
			$nombremama =$_POST['nombremama'];
			$observaciones = $_POST['observaciones'];
			$estado = $_POST['estado'];
			$linea = $_POST['linea'];

			if (!empty($placa) && !empty($nombre) && !empty($fecnac) && !empty($sexo) && !empty($nplacapapa) && !empty($nombrepapa) && !empty($nplacamama) && !empty($nombremama) && !empty($observaciones) && !empty($estado) && !empty($linea)) {

				$consulta_insert=$con->prepare('INSERT INTO gallo(nplaca,nombre,fecha,sexo,nplacapapa,nombrepapa,nplacamama,nombremama,observaciones,estado,linea)
					VALUES (:nplaca,:nombre,:fecha:sexo,:nplacapapa,:nombrepapa,:nplacamama,:nombremama,:observaciones,:estado,:linea)');
				$consulta_insert->execute(array(
					':nplaca'=>$placa,
					':nombre'=>$nombre,
					':fecha'=>$fecnac,
					':sexo'=>$sexo,
					':nplacapapa'=>$nplacapapa,
					':nombrepapa'=>$nombrepapa,
					':nplacamama'=>$nplacamama,
					':nombremama'=>$nombremama,
					':observaciones'=>$observaciones,
					':estado'=>$estado,
					':linea'=>$linea
				));
				header('location:index.php');
				
			}else{
				echo "<script>alert('los campos estan vacios');</script>";
			}
	}

	if (isset($_FILES['file']) && isset($_POST['guardar'])) {
		$name_file = $_FILES['file']['name'];
		$tmp_name =  $_FILES['file']['tmp_name'];
		$placa = $_POST['placa'];
		$carpeta = mkdir("image/".$placa, 0700);
		$local_image = "image/";
		$upload = move_uploaded_file($tmp_name,$local_image.$placa."/".$name_file);

		}

 ?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Nuevo Gallo</title>
	<link rel="stylesheet" href="css/estilo.css">
	<script src = "https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script >
	
</head>

<body>

	<div class="contenedor">
		
		<form action="" method="POST" enctype="multipart/form-data" id="formd">
			<h1><center>Relación de gallos</center></h1><br>
			<h2>Información del Gallo</h2>
			<div class="form-group">
				<input type="text" name="placa" placeholder="Placa" class="input__text">
				<input type="text" name="nombre" placeholder="Nombre" class="input__text"> 
			</div>
			<div class="form-group">
				<input type="text" name="fecnac" placeholder="Fecha de Nacimiento" class="input__text">
				<input type="text" name="sexo" placeholder="Sexo" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="observaciones" placeholder="Observación" class="input__text">
				<input type="file" class="input__text" name="file">
			</div> 
			<h2>Padres</h2>
			<div class="form-group">
				<input type="text" name="nplacapapa" placeholder="N°Placa Padre" class="input__text">
				<input type="text" name="nombrepapa" placeholder="Nombre Padre" class="input__text">
			</div>
			<div class="form-group">
				<input type="text" name="nplacamama" placeholder="N°Placa Madre" class="input__text">
				<input type="text" name="nombremama" placeholder="Nombre Madre" class="input__text">
			</div>
			
			<h2>Acerca de.</h2>
			<div class="form-group">
				<input type="text" name="estado" placeholder="ESTADO" class="input__text">
				<input type="text" name="linea" placeholder="Linea" class="input__text">
			</div>

			<div class="btn__group">
				<a href="index.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" class="btn btn__primary" value="Guardar" name="guardar">
				<script>
					swal ( "¡ Buen trabajo! " , "¡ Agregado con éxito! " , "success" )   ;	
					
				</script>
			</div>
		</form>
	</div>
</body>
</html>