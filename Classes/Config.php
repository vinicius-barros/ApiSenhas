<?php
class Config{

	public function conexao(){
		try {
			$dns = "mysql:dbname=senhas;host=localhost";
			$user= "root";
			$senha="";
			$pdo = new PDO($dns,$user,$senha);
			return $pdo;
		} catch (PDOException $e)
		{
			die($e->getMessage());

		}
	}


}




