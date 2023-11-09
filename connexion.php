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


$requete = $conn->prepare("SELECT * FROM `user` WHERE id = :usrid");
$requete->bindParam(':usrid', $usrid);
$requete->execute();

if ($row = $requete->fetch(PDO::FETCH_ASSOC)) {

    if (password_verify($usrmdp, $row[''])) {
        echo "Connexion réussie. Bienvenue, " . $row[''];

    } else {
        echo "Mot de passe incorrect";
    }
} else {
    echo "Identifiant incorrect";
}

$requete->closeCursor();
?>