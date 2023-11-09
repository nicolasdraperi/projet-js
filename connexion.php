<?php


 // connexion a la BDD
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

session_start();
//récupératon des données entrés dans la page de login
$user_id = $_POST["id"];;
$user_password=$_POST["password"];

$requete = $conn->prepare("SELECT * FROM `user` WHERE Username = :user_id");
$requete->bindParam(':user_id', $user_id);
$requete->execute();

if (!$requete) {
    printf("Lecture impossible"); 
} else {
    $hash = password_hash($user_password, PASSWORD_DEFAULT);
    while ($row = $requete->fetch(PDO::FETCH_NUM)) {
        if ($user_id == $row[1] and password_verify($user_password, $hash)){
            $_SESSION[$user_id] = $row[1];
            header('Location: accueil.html');
            
        }
        else{
            header('Location: login.html');
        }
        

    }
    $requete->closeCursor();
}
$_SESSION



?>