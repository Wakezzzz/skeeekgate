<?php


$host_name = '127.0.0.1';
$database = 'skeekgate';
$user_name = 'root';
$password = '';
$pdo = null;
$dsn = 'mysql:dbname=skeekgate;host=127.0.0.1';
$user = 'root';
$password = '';


try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo "Erreur!: " . $e->getMessage() . "<br/>";
    die();
}
