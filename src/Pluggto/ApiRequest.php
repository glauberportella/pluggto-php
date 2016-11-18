<?php

namespace Pluggto;

class ApiRequest extends \Httpful\Request
{
	public function __construct($attrs = null)
	{
		parent::__construct($attrs);
		// template
		self::ini(self::init()
			->expectsJson()
			->sendsJson());
	}
}