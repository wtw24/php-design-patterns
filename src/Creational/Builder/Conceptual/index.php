<?php

namespace App\Creational\Builder\Conceptual;

require __DIR__ . '/../../../vendor/autoload.php';

/**
 * Клиентский код создаёт объект-строитель, передаёт его директору, а затем
 * инициирует процесс построения. Конечный результат извлекается из
 * объекта-строителя.
 */
function clientCode(Director $director)
{
    $builder = new ConcreteBuilder1;
    $director->setBuilder($builder);

    echo "Standard basic product:\n";
    $director->buildMinimalViableProduct();
    $builder->getProduct()->listParts();

    echo "Standard full featured product:\n";
    $director->buildFullFeaturedProduct();
    $builder->getProduct()->listParts();

    // Помните, что паттерн Строитель можно использовать без класса Директор.
    echo "Custom product:\n";
    $builder->producePartA();
    $builder->producePartC();
    $builder->getProduct()->listParts();
}

echo '<pre>';

$director = new Director;
clientCode($director);