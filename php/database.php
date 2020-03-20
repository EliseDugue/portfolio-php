<?php

$DB_DSN = "mysql:dbname=php_portfolio;host=localhost";
$DB_USER = "php";
$DB_PASSWORD = "phpmmi";

try {
    $db = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec('SET NAMES utf8');
} catch (PDOException $e) {
echo 'Echec de la connexion : ' . $e->getMessage();
}

?>