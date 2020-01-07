<?php
declare(strict_types=1);

class Connection 
{
	public static function make(array $config): object
	{
		try {
            
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
		} catch (PDOException $e) {

			die('Could not connect.');
		}
	}
}
