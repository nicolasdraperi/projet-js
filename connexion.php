<?php

$host = "localhost"; 
$port = "3306";
$dbname = "cybertech"; 
$username = "root"; 
$password = ""; // 
try {
    $conn = new PDO('mysql:host=' . $host . ';port=' . $port . ';dbname=' . $dbname, $username, $password);

} catch (PDOException $except) {
    echo "Echec de la connexion : " . $except->getMessage();
}

$usrid = $_POST["id"];;
$usrmdp=$_POST["password"];


$requete = $conn->prepare("SELECT * FROM `user` WHERE Username = :usrid");
$requete->bindParam(':usrid', $usrid);
$requete->execute();

if (!$requete) {
    printf("Lecture impossible"); 
} else {
    $hash = password_hash($usrmdp, PASSWORD_DEFAULT);
    while ($row = $requete->fetch(PDO::FETCH_NUM)) {
        if ($usrid == $row[1] and password_verify($usrmdp, $hash)){
            header('Location: accueil.html');
            
        }
        else{
            ?>
                <script> alert('mot de passe incorrect !'); </script> 
            <?php
        }
        
    }
    $requete->closeCursor();
}

/*
if ($col = $requete->fetch(PDO::FETCH_ASSOC)) {
    echo'usrn : '. $col['Username'] .' mdp : '. $col['Password'];
    if (password_verify($usrmdp, $col['Password'])) {
        echo "Connexion réussie. Bienvenue, " . $col['Username'];

    } else {
        echo "Mot de passe incorrect";
    }
} else {
    echo "Identifiant incorrect";
}

$requete->closeCursor();
*/
?>