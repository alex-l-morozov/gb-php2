<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/lesson3/vendor/autoload.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/lesson3/connect.php');

$loader = new \Twig\Loader\FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . '/lesson3/templates');
$twig = new \Twig\Environment($loader, [
    'cache' => $_SERVER['DOCUMENT_ROOT'] . '/lesson3/cache',
]);

try {
    if (intval($_GET['id']) > 0) {
        $rsPhoto = $obConnect->prepare("SELECT img_big, name, raiting FROM gallery WHERE `id` = ?");
        $rsPhoto->execute([$_GET['id']]);
        if ($arPhoto = $rsPhoto->fetch(PDO::FETCH_LAZY)) {
            $query = "UPDATE `gallery` SET `raiting`=raiting+1 WHERE `id` = :id";
            $params = [
                ':id' => $_GET['id'],
            ];
            $stmt = $obConnect->prepare($query);
            $stmt->execute($params);
            $template = $twig->load('detail.tmpl');
            echo $template->render(
                [
                    'photo' => $arPhoto,
                ]
            );
        } else {
            header('./index.php');
        }
    } else {
        header('./index.php');
    }
} catch (Exception $e) {
    die ('Error: ' . $e->getMessage());
}