<?php
require 'initialisation .php';

try {
$sql = "CREATE TABLE Administrateur (
    Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Nom_admin VARCHAR(30) NOT NULL,
    Mot_de_passe VARCHAR(30))";

$conn->exec($sql);
echo 'Table bien créée !';
}


catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}




?>