<?php

use App\Creational\FactoryMethod\Conceptual\ConcreteCreator1;
use App\Creational\FactoryMethod\Conceptual\ConcreteCreator2;
use App\Creational\FactoryMethod\Conceptual\Creator;

require __DIR__ . '/../../../vendor/autoload.php';

/**
 * Клиентский код работает с экземпляром конкретного создателя, хотя и через его
 * базовый интерфейс. Пока клиент продолжает работать с создателем через базовый
 * интерфейс, вы можете передать ему любой подкласс создателя.
 *
 * @param Creator $creator
 */
function clientCode(Creator $creator)
{
    // ...
    echo "Client: I'm not aware of the creator's class, but it still works.\n"
        . $creator->someOperation();
    // ...
}

echo '<pre>';

/**
 * Приложение выбирает тип создателя в зависимости от конфигурации или среды.
 */
echo "App: Launched with the ConcreteCreator1.\n";

clientCode(new ConcreteCreator1);

echo "\n\n";

echo "App: Launched with the ConcreteCreator2.\n";

clientCode(new ConcreteCreator2);
