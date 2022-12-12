<?php declare(strict_types=1);

namespace ExPF;

use Exception;
use ExPF\pages\home\HomeView;
use ExPF\pages\home\ListView;

require_once('src/autoload.php');

$uri = rtrim($_SERVER['REQUEST_URI'], '/');
$path = explode('?', $uri)[0];

try {
    $route = match ($path) {
    '/' => new HomeView(),
    '/list' => new ListView(),
    default => new HomeView(),
}; echo $route->generate();
} catch (Exception $e) {
    echo $e->getMessage();
}


