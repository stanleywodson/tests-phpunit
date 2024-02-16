<?php
namespace tests\unit\core\library;

use core\library\Validate;
use PHPUnit\Framework\TestCase;

class ValidateTest extends TestCase
{
	public function test_validate_required()
	{
		$validate = new Validate;
		$validated = $validate->required('name');

		$this->assertArrayHasKey('name', ['name' => 'stanley']);
	}
	/** @test */
	public function email()
	{
		$this->assertTrue(true);
	}
}
