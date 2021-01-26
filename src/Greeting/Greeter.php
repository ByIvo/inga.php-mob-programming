<?php

namespace IngaPhp\Greeting;

class Greeter {

	public function sayHello(string $name): string {
		return "Hello, {$name}!";
	}
}
