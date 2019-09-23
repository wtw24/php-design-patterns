<?php

namespace App\Creational\Singleton\Conceptual;

require __DIR__ . '/../../../vendor/autoload.php';

function clientCode()
{
    $s1 = Singleton::getInstance();
    $s2 = Singleton::getInstance();

    if ($s1 === $s2) {
        echo "Singleton works, both variables contain the same instance.";
    } else {
        echo "Singleton failed, variables contain different instances.";
    }
}

echo '<pre>';

clientCode();
