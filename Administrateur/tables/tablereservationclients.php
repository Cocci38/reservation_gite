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