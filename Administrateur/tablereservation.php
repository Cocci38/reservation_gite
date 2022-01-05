<?php
require 'initialisation .php';

try {
$sql = "CREATE TABLE Gites (
    Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Intitule VARCHAR(30) NOT NULL,
    Decription TEXT NOT NULL,
    Photo VARCHAR(255) NOT NULL,
    Nombre de couchages VARCHAR(30) NOT NULL,
    Nombre de salles de bain VARCHAR(30) NOT NULL,
    Emplacement geographique VARCHAR(30) NOT NULL,
    Prix INT UNSIGNED NOT NULL,
    Disponibilite VARCHAR(30) NOT NULL";

$conn->exec($sql);
echo 'Table bien créée !';
}


catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}

?>