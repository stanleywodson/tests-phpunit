<?php

namespace core\library;

class Validate
{
	public function required()
	{
		$name = filter_var('Stanley', FILTER_SANITIZE_STRING);
		return true;
	}

	public function email()
	{
		$email = 'stanley.wodson@gmail.com';
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			throw new \Exception('Invalid email address');
		}
	}
}
