<?php

namespace Tests\Pluggto\API;

class OrderTest extends \PHPUnit_Framework_TestCase
{
	public function testCanInstantiate()
	{
		$instance = new \Pluggto\API\Order();
		$this->assertInstanceOf('\Pluggto\API\Order', $instance);
	}
}