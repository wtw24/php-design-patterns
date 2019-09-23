<?php

namespace App\Creational\AbstractFactory\Conceptual;

/**
 * Каждый отдельный продукт семейства продуктов должен иметь базовый интерфейс.
 * Все вариации продукта должны реализовывать этот интерфейс.
 */
interface AbstractProductA
{
    public function usefulFunctionA(): string;
}
