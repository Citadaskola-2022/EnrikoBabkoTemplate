<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    'contacts' => 'controllers/contacts.php',
    '/pd/task4' => 'controllers/pd/task4.php',
    '/register' => 'controllers/users/register.php',
    '/logout' => 'controllers/users/logout.php',
    '/posts' => 'controllers/posts/index.php',
    '/exit' => 'controllers/exit.php'
];

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
} else {
    abort();
}

