<?php

namespace App\Creational\FactoryMethod\Conceptual;

class ConcreteProduct2 implements Product
{
    public function operation(): string
    {
        return "{Result of the ConcreteProduct2}";
    }
}
