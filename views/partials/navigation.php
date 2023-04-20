<?php
use App\LinksClass\Link;

/** @var  Link[] $links */
$links = [
    new Link('Home',  '/'),
    new Link('Posts', '/posts'),
    (new Link('EXIT', 'https://ej.uz/salida'))->setExternal()
];
?>

<nav class="bg-gray-600">
    <div class="ml-10 flex items-baseline space-x-4">
<?php foreach($links as $url => $link) : ?>
    <li>
        <?php if(!$link->isExternal()) : ?>
        <a href="<?= $link->getUrl()?>"><?= $link->getName() ?></a>
        <?php endif; ?>

        <?php if($link->isExternal()) : ?>
            <a href="<?= $link->getUrl()?>" target="_blank"><?= $link->getName() ?></a>
        <?php endif; ?>
    </li>
<?php endforeach; ?>
    </div>
</nav>