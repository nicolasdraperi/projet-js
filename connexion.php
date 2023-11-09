<?php

$host = "localhost"; 
$port = "3306";
$dbname = "bob"; 
$username = "root"; 
$password = ""; // 
try {
    $conn = new PDO('mysql:host=' . $host . ';port=' . $port . ';dbname=' . $dbname, $username, $password);
    echo "connexion reussi";
} catch (PDOException $except) {
    echo "Echec de la connexion : " . $except->getMessage();
}

$usrid = $_POST["id"];;
$usrmdp=$_POST["password"];



?>