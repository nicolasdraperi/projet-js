<?php
            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $dbname= 'cybertech';
            
            //On établit la connexion
            $conn = new mysqli($servername, $username, $password,$dbname);
            
            //On vérifie la connexion
            if($conn->connect_error){
                die('Erreur : ' .$conn->connect_error);
            }


?>