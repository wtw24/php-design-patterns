<?php

namespace App\Structural\Composite\Conceptual;

require __DIR__ . '/../../../vendor/autoload.php';

/**
 * Клиентский код работает со всеми компонентами через базовый интерфейс.
 */
function clientCode(Component $component)
{
    // ...

    echo "RESULT: " . $component->operation();

    // ...
}


/**
 * Благодаря тому, что операции управления потомками объявлены в базовом классе
 * Компонента, клиентский код может работать как с простыми, так и со сложными
 * компонентами, вне зависимости от их конкретных классов.
 */
function clientCode2(Component $component1, Component $component2)
{
    // ...

    if ($component1->isComposite()) {
        $component1->add($component2);
    }
    echo "RESULT: " . $component1->operation();

    // ...
}

echo '<pre>';

/**
 * Таким образом, клиентский код может поддерживать простые компоненты-листья...
 */
$simple = new Leaf;
echo "Client: I've got a simple component:\n";
clientCode($simple);
echo "\n\n";


/**
 * ...а также сложные контейнеры.
 */
$tree = new Composite;
$branch1 = new Composite;
$branch1->add(new Leaf);
$branch1->add(new Leaf);
$branch2 = new Composite;
$branch2->add(new Leaf);
$tree->add($branch1);
$tree->add($branch2);
echo "Client: Now I've got a composite tree:\n";
clientCode($tree);
echo "\n\n";



echo "Client: I don't need to check the components classes even when managing the tree:\n";
clientCode2($tree, $simple);