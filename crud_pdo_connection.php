<?php

		//Realizando a conexão com o banco de dados em PDO


		try {
			$connection = new PDO("mysql:dbname=crud_pdo;host=localhost","root","");
		} catch (PDOException $e) {
			echo "Erro com o banco de dados!".$e->getMessage();
		} catch(Exception $e){
			echo "Erro generico:".$e->getMessage();
		}
	

		

 ?>