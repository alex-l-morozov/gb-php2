<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/lesson3/config.inc.php');

try {
    $obConnect = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB, MYSQL_USER, MYSQL_PASSWORD);
} catch (PDOException $e) {
    echo "Error!: " . $e->getMessage();
    die();
}