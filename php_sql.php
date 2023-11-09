<?php 

$valeur1 = "valeur1";
$valeur2 = "valeur2";
$valeur3 = "valeur3";



$sql_insert = "insert into [nom_de_la_table] ([colonne1], [colonne2], [colonne3]) VALUES (?, ?, ?)";

$prep_insert = $mysqli->prepare($sql);

$$prep_insert->bind_param("insert", $valeur1, $valeur2, $valeur3);


if ($prep_insert->execute()) {
    echo "Les données ont été insérées avec succès.";
} else {
    echo "Erreur lors de l'insertion des données : " . $prep_insert->error;
}

$prep_insert->close();
$mysqli->close();
?>