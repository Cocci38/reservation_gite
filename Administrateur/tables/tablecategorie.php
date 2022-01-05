<?php
require 'initialisation .php';

try {
$sql = "CREATE TABLE Categories (
    Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Id_categorie INT (10),
    Nom VARCHAR(30) NOT NULL)";

$conn->exec($sql);
echo 'Table bien créée !';
}


catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}




?>