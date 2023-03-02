<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

function abort(int $code = 404): void
{
    http_response_code($code);

    echo "Sorry, page not found.";

    die();
}

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    'contacts' => 'controllers/contacts.php',
    '/pd/task4' => 'controllers/pd/task4.php',
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    abort();
}

