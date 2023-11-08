<?php

$host = "localhost"; // le chemin vers le serveur
$port = "3306";
$dbname = "bob"; // le nom de votre BDD
$username = "root"; // nom d'utilisateur pour se connecter
$password = ""; // mot de passe pour se connecter
try {
    $conn = new PDO('mysql:host=' . $host . ';port=' . $port . ';dbname=' . $dbname, $username, $password);
    echo "connexion reussi";
} catch (PDOException $except) {
    echo "Echec de la connexion : " . $except->getMessage();
}

?>