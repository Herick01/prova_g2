<?php

	class conexao
	{
		var $conn;//propriedade
		
		//método
		function abrir_conexao()//abrir conexao com o banco de dados
			{
				$servername = 'localhost';
				$username = 'root';
				$password = 'root';
				$dbname = 'lpw_g2';
				
				$this -> conn = new mysqli($servername, $username, $password, $dbname);
				
			}
			
		function getconn()
			{
				return $this -> conn;
			}
	}
	
?>