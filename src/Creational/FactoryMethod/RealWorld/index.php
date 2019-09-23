<?php


use App\Creational\FactoryMethod\RealWorld\FacebookPoster;
use App\Creational\FactoryMethod\RealWorld\LinkedInPoster;
use App\Creational\FactoryMethod\RealWorld\SocialNetworkPoster;

require __DIR__ . '/../../../vendor/autoload.php';

/**
 * Клиентский код может работать с любым подклассом SocialNetworkPoster, так как
 * он не зависит от конкретных классов.
 */
function clientCode(SocialNetworkPoster $poster)
{
    // ...
    $poster->post("Hello world!");
    $poster->post("I had a large hamburger this morning!");
    // ...
}

echo '<pre>';

/**
 * На этапе инициализации приложение может выбрать, с какой социальной сетью оно
 * хочет работать, создать объект соответствующего подкласса и передать его
 * клиентскому коду.
 */
echo "Testing FacebookPoster:\n";
clientCode(new FacebookPoster("john_smith", "******"));
echo "\n\n";

echo "Testing LinkedInPoster:\n";
clientCode(new LinkedInPoster("john_smith@example.com", "******"));
