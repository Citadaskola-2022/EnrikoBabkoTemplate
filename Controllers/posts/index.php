<?php

$db = \App\Database::getInstance();

$posts = $db->query(<<<MySQL
    SELECT * FROM posts
MySQL
);

$one = $db->getOne(<<<MySQL
    SELECT * FROM posts WHERE id = :blog_post_id
MySQL, [
    'blog_post_id' => $_GET['id'] ?? 1,
]);

view('posts/index.view.php',
    [
        'posts' => $posts
    ]);