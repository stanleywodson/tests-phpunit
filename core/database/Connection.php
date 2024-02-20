<?php

namespace core\database;

class Connection 
{
	private static $instance = null;
	
	public static function getConnection()
	{
		\dump($_ENV['DB_NAME']);
		if (!self::$instance) {
			$host = $_ENV['DB_HOST'];
			$dbname = $_ENV['DB_NAME'];
			$username = $_ENV['DB_USERNAME'];
			$password = $_ENV['DB_PASSWORD'];
			self::$instance = new \PDO('mysql:host=' . $host . ';dbname=' . $dbname, $username, $password, [
				\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
			]);			
		}

		return self::$instance;
	}
}