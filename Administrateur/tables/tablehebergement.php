<?php
require 'initialisation .php';

try {
$sql = "CREATE TABLE Hebergements(
    Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Id_categorie INT (10),
    Intitule VARCHAR(30) NOT NULL,
    Decription TEXT NOT NULL,
    Photo VARCHAR(255) NOT NULL,
    Nombre_de_couchages INT UNSIGNED NOT NULL,
    Nombre_de_salles_de_bain INT UNSIGNED NOT NULL,
    Emplacement_geographique VARCHAR(30) NOT NULL,
    Prix INT UNSIGNED NOT NULL,
    Disponibilite VARCHAR(30) NOT NULL)";

$conn->exec($sql);
echo 'Table bien créée !';
}


catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}

?>