<?php

namespace Test\IngaPhp\Greeting;

use IngaPhp\Greeting\Greeter;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class GreeterTest extends TestCase {

	public function testSayHello() {
		$greater = new Greeter();

		$greeting = $greater->sayHello('World');

		Assert::assertEquals('Hello, World!', $greeting);
	}
}
