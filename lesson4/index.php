<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/lesson4/vendor/autoload.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/lesson4/connect.php');

$loader = new \Twig\Loader\FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . '/lesson4/templates');
$twig = new \Twig\Environment($loader, [
    'cache' => $_SERVER['DOCUMENT_ROOT'] . '/lesson4/cache',
]);

try {
    $arPhotos = [];
    $sth = $obConnect->prepare("SELECT id, name, img_small FROM gallery ORDER BY raiting DESC LIMIT 4");
    $sth->execute();
    $arPhotos = $sth->fetchAll(PDO::FETCH_ASSOC);

    $sth = $obConnect->prepare("SELECT COUNT(`id`) FROM gallery");
    $sth->execute();
    $total = $sth->fetch(PDO::FETCH_COLUMN);
    $pages = ceil($total / 4);

    $template = $twig->load('list.tmpl');
    echo $template->render(
        [
            'photos' => $arPhotos,
            'pages' => $pages,
        ]
    );
} catch (Exception $e) {
    die ('Error: ' . $e->getMessage());
}