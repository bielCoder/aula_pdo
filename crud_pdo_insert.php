<?php 	
		require_once('crud_pdo_connection.php');
		// Inserindo dados com passagem de parametros.
		$res = $connection->prepare("INSERT INTO crudpdo(nome,telefone,email)VALUES(:n,:t,:e)");
			//dados
			$nome = $_POST['nome'];
			$telefone = $_POST['telefone'];
			$email = $_POST['email']; 
		$res->bindparam(":n",$nome);
		$res->bindparam(":t",$telefone);
		$res->bindparam(":e",$email);
		$res -> execute();

		
		// Inserindo dados sem passagem de parametros.
		// $res = $connection->query("INSERT INTO crudpdo(nome,telefone,email)VALUES('Carlos','61923232323','carlos@gmail.com')");
		
 ?>