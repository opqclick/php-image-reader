<?php

namespace Opqclick\Imagereader\HelloWorld;
use thiagoalessio\TesseractOCR\TesseractOCR;
use thiagoalessio\TesseractOCR\TesseractOcrException;

class Greetings {
    /**
     * @throws TesseractOcrException
     */
    public static function sayHelloWorld(): string
    {
        $image = "./img/3.jpeg";

        $content = new TesseractOCR($image);

        if (str_contains($content->run(), 'name')) {
            return true;
        }

    }
}