<?php

class Connection 

{
	public static function make() 
	{

		try {

		return new PDO('mysql:host=127.0.0.1;dbname=todos', 'root', 'adminekk');

		} catch (PDOException $e) {

			die('Could not connect.');
		
		}
	}

}



$pdo = Connection::make();

