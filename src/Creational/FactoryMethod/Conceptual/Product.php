<?php

namespace App\Creational\FactoryMethod\Conceptual;

/**
 * Интерфейс Продукта объявляет операции, которые должны выполнять все
 * конкретные продукты.
 */
interface Product
{
    public function operation(): string;
}
