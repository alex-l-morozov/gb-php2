<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/lesson4/connect.php');

$limit = 4;

$page = intval(@$_GET['page']);
$page = (empty($page)) ? 1 : $page;
$start = ($page != 1) ? $page * $limit - $limit : 0;
$sth = $obConnect->prepare("SELECT id, name, img_small FROM gallery ORDER BY raiting LIMIT {$start}, {$limit}");
$sth->execute();
$arPhotos = $sth->fetchAll(PDO::FETCH_ASSOC);

foreach ($arPhotos as $arPhoto) {
    ?>
    <div class="col-3">
        <a href="/lesson4/detail.php?id=<?=$arPhoto['id']?>"><img src="<?=$arPhoto['img_small']?>" alt="<?=$arPhoto['name']?>" width="200"></a>
    </div>
    <?php
}