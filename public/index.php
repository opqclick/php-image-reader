<?php

// Autoload files using the Composer autoloader.
require_once __DIR__ . '/../vendor/autoload.php';

use Opqclick\Imagereader\HelloWorld\Greetings as Greetings;

echo Greetings::sayHelloWorld();