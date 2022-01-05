<?php
require 'initialisation .php';

try {
$sql = "CREATE TABLE Reservation_clients (
    Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Id_hebergement INT (10),
    Nom VARCHAR(30) NOT NULL,
    Prenom TEXT NOT NULL,
    Mail VARCHAR(40) NOT NULL,
    Date_darrivee DATE NOT NULL,
    Date_depart DATE NOT NULL)";

$conn->exec($sql);
echo 'Table bien créée !';
}


catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}




?>