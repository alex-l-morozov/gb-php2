<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/lesson3/vendor/autoload.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/lesson3/connect.php');

$loader = new \Twig\Loader\FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . '/lesson3/templates');
$twig = new \Twig\Environment($loader, [
    'cache' => $_SERVER['DOCUMENT_ROOT'] . '/lesson3/cache',
]);

try {
    $arPhotos = [];
    $rsPhoto = $obConnect->query("SELECT id, name, img_small FROM gallery ORDER BY raiting DESC");
    while ($arPhoto = $rsPhoto->fetch())
    {
        $arPhotos[] = $arPhoto;
    }
    $template = $twig->load('list.tmpl');
    echo $template->render(
        [
            'photos' => $arPhotos,
        ]
    );
} catch (Exception $e) {
    die ('Error: ' . $e->getMessage());
}