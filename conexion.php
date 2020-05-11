<?php 
	$database="gallos";
	$user='root';
	$password='12345678';
	try {
		$con=new PDO('mysql:host=localhost;dbname='.$database,$user,$password);
	} catch (PDOException $e) {
		echo "Error".$e->getMessage();
	}

 ?>