<?php
try {
    // Overture session :
    
    session_start();
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "reservation";
    
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
    catch (PDOException $e) {
        echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
    }

try {
$sql = "CREATE TABLE Reservation_clients (
    Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Id_hebergement INT (10),
    arrivee DATE NOT NULL,
    depart DATE NOT NULL,
    adulte INT UNSIGNED NOT NULL,
    enfant INT UNSIGNED NOT NULL,
    titre VARCHAR(20) NOT NULL,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    adresse VARCHAR(100) NOT NULL,
    code_postal VARCHAR(5) NOT NULL,
    ville VARCHAR(100) NOT NULL,
    pays VARCHAR(100) NOT NULL,
    telephone VARCHAR(30) NOT NULL,
    mail VARCHAR(40) NOT NULL)";


$conn->exec($sql);
echo 'Table bien créée !';
}


catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}




?>