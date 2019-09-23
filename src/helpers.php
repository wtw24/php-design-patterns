<?php

function env($key, $default = null)
{
    $value = getenv($key);

    if ($value === false) {
        return $default;
    }

    switch (strtolower($value)) {
        case 'true':
        case '(true)':
            return true;
        case 'false':
        case '(false)':
            return false;
        case 'empty':
        case '(empty)':
            return '';
        case 'null':
        case '(null)':
            return null;
    }

    return $value;
}

/**
 * The value function returns the value it is given.
 * However, if you pass a Closure to the function, the Closure will be executed then its result will be returned.
 *
 * @param $value
 * @return mixed
 */
function value($value)
{
    return ($value instanceof Closure) ? call_user_func($value) : $value;
}

/**
 * The array_get function retrieves a value from a deeply nested array using "dot" notation:
 * $price = array_get($array, 'products.desk.price');   // 100
 *
 * The array_get function also accepts a default value, which will be returned if the specific key is not found:
 * $discount = array_get($array, 'products.desk.discount', 0);  // 0
 *
 * @param $array
 * @param $key
 * @param null $default
 * @return mixed
 */
function array_get($array, $key, $default = null)
{
    if (is_null($key)) return $array;

    foreach (explode('.', $key) as $segment) {
        if (!is_array($array) or !array_key_exists($segment, $array)) {
            return value($default);
        }

        $array = $array[$segment];
    }

    return $array;
}


/**
 * @return \Monolog\Logger
 */
function logger(string $filename = null, string $channel = null)
{
    return App\Logger::make($filename, $channel);
}