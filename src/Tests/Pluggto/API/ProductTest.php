<?php

namespace Tests\Pluggto\API;

class ProductTest extends \PHPUnit_Framework_TestCase
{
	public function testCanInstantiate()
	{
		$instance = new \Pluggto\API\Product();
		$this->assertInstanceOf('\Pluggto\API\Product', $instance);
	}
}