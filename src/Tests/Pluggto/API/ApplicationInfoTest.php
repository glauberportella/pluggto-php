<?php

namespace Tests\Pluggto\API;

class ApplicationInfoTest extends \PHPUnit_Framework_TestCase
{
	public function testCanInstantiate()
	{
		$instance = new \Pluggto\API\ApplicationInfo();
		$this->assertInstanceOf('\Pluggto\API\ApplicationInfo', $instance);
	}
}