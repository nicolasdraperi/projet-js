

<?php

 //Paramètre de connexion 
$Nom=$_POST['nom'];
$Prénom=$_POST['prénom'];
$Email=$_POST['email'];
$Message=$_POST['message'];
$servername = 'localhost';
$username = 'root';
$password = '';
$mydb='cybertech';
//On établit la connexion
$conn = new mysqli($servername, $username, $password,$mydb);

//On vérifie la connexion
if($conn->connect_error){
    die('Erreur : ' .$conn->connect_error);
}


//préparation de la requête pour envoyer les données
$requete= 'INSERT INTO données(nom,prenom,email,message) VALUE ("'.$Nom.'","'.$Prénom.'","'.$Email.'","'.$Message.'")';
$result = $conn->query($requete);if (!$result) {
printf("Lecture impossible");
// Destruction de l'objet $result
$result->free();
}else{
    ?><html><script defer>alert("Merci pour votre mail, nous l'avons bien reçu 😁😀😀")</script></html><?php
    include("Contacternous.html");
    
}
// Fermeture de la connexion
$conn->close();
?>

