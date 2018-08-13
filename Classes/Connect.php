<?php
/**
 * Created by PhpStorm.
 * User: Objeto-031
 * Date: 29/05/2018
 * Time: 14:12
 */

class Connect
{
	private $pdo;


	public function  __construct ($host, $dbname, $dbuser, $dbpass)
	{
		try
		{
			$this->pdo= new PDO("mysql:host=".$host.";dbname=".$dbname, $dbuser, $dbpass);
			
			// echo "Connected to Successfully!";
		}
		catch(PDOException $e)
		{
			echo "Connection failed" . $e->getMessage();
		}
		
	}

	public function query($sql)
	{
		$query = $this->pdo->query($sql);
		return $query;
	}
}




