<?php

$links = [
    '/' => 'Home',
    '/posts' => 'Posts'
];
?>

<nav class="bg-gray-800">
    <div class="ml-10 flex items-baseline space-x-4">
<?php foreach($links as $url => $name) : ?>
    <li>
        <a href="<?= $url?>"><?= $name ?></a>
    </li>
<?php endforeach; ?>
    </div>
</nav>