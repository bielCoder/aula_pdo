<?php 	

		require_once('crud_pdo_connection.php');

			// Atualizando com passagem de parametro

		// $res = $connection -> prepare("UPDATE crudpdo SET nome = :n WHERE id = :id");
		// // dados
		// $id = 9;
		// $nome = "Hellen Sousa";

		// $res->bindparam(":id",$id);
		// $res->bindparam(":n",$nome);
		
		// $res -> execute();

			// Atualizando sem passagem de parametros
		$res = $connection -> query("UPDATE crudpdo SET nome = 'Hellinha' WHERE id = '9'");

 ?>