<?php

use core\database\Connection;
use Dotenv\Dotenv;

require '../vendor/autoload.php';

echo 'stanley wodson';

$dotenv = Dotenv::createImmutable(dirname(__FILE__, 2));
$dotenv->load();

$connection = Connection::getConnection();
