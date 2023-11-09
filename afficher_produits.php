<?php
// Inclure le fichier de connexion à la base de données
include('ConnexionBDD.php');

// Requête SQL pour récupérer les produits de la base de données
$sql = "SELECT ID_Produits, Nom_Produits, Description, Prix FROM produits";
$resultat = $conn->query($sql);

// Vérifier s'il y a des résultats
if ($resultat->num_rows > 0) {
    // Afficher les produits dans un tableau HTML
    echo "<table border='1'>
    <tr>
    <th>Produit</th>
    <th>Description</th>
    <th>Prix</th>
    </tr>";

    // Afficher les données de chaque produit
    while ($row = $resultat->fetch_assoc()) {
        echo "<tr class = 'ligne'>
        <td>" . $row["Nom_Produits"] . "</td>
        <td>" . $row["Description"] . "</td>
        <td>$" . $row["Prix"] . "</td>
        </tr>";
    }
    echo "</table>";
} else {
    echo "Aucun produit trouvé dans la base de données.";
}

// Fermer la connexion à la base de données
$conn->close();
?>
