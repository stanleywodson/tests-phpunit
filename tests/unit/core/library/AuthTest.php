<?php
namespace tests\unit\core\library;

use core\library\Auth;
use PHPUnit\Framework\TestCase;

class AuthTest extends TestCase
{
	protected $auth;
	public function setup(): void
	{
			$this->auth = new Auth;
	}
	/** @test */
	public function login()
	{
		$result = $this->auth->attempt();
		$this->assertTrue($result);
	}

	// public function tearDown(): void
	// {

	// }
}
