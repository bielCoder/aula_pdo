<?php 	

require_once('crud_pdo_connection.php');
		// Resgatando dados com passagem de parametro.
		// $res = $connection -> prepare("SELECT * FROM crudpdo WHERE id = :id");
		// dados
	// 	$id = 9;

	// 	$res -> bindparam(':id',$id);
	// 	$res -> execute();
	// $result	= $res -> fetch(PDO::FETCH_ASSOC);
	
	// 	foreach ($result as $key => $value) {
	// 			echo $key . ":". $value."<br>";
	// 	}
		
		// Resgatando dados sem passagem de parametros.

		$res = $connection -> query("SELECT * FROM crudpdo WHERE id = 9");

		$result	= $res -> fetch(PDO::FETCH_ASSOC);
		foreach ($result as $key => $value) {
				echo $key . ":". $value."<br>";
		}
 ?>