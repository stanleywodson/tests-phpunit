<?php
namespace tests\unit\core\library;

use core\library\Auth;
use PHPUnit\Framework\TestCase;

class AuthTest extends TestCase
{
	/** @test */
	public function login()
	{
		$auth = new Auth;
		$result = $auth->attempt();
		$this->assertTrue($result);
	}
}
