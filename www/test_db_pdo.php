<?php

$DBuser = 'root';
$DBpass = $_ENV['MYSQL_ROOT_PASSWORD'];
$pdo = null;

try{
    $database = 'mysql:host=database:3306';
    $pdo = new PDO($database, $DBuser, $DBpass);
    echo "Bravo : La connexion MySQL fonctionne ! Les fonctionnalités PDO sont disponnibles.";
} catch(PDOException $e) {
    echo "Erreur: Impossible de se connecter à MySQL. Error:\n $e";
}

$pdo = null;