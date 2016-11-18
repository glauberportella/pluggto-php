<?php

namespace Tests\Pluggto\API;

class ShippingTest extends \PHPUnit_Framework_TestCase
{
	public function testCanInstantiate()
	{
		$instance = new \Pluggto\API\Shipping();
		$this->assertInstanceOf('\Pluggto\API\Shipping', $instance);
	}
}