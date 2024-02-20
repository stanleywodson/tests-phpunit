<?php

namespace tests\unit\core\database;

use core\database\Connection;
use PHPUnit\Framework\TestCase;

class SelectTest extends TestCase
{
	public function test_query_created_is_correct()
	{
		$connection = Connection::getConnection();
	}
}
