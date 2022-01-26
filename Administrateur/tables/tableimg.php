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
    $sql = "CREATE TABLE images (
        Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Id_hebergement INT (10),
        Nom1 VARCHAR(30) NOT NULL,
        Nom2 VARCHAR(30) NOT NULL,
        Nom3 VARCHAR(30) NOT NULL,
        Nom4 VARCHAR(30) NOT NULL,
        Nom5 VARCHAR(30) NOT NULL)";
    
    $conn->exec($sql);
    echo 'Table bien créée !';
}
    
    catch (PDOException $e){
    echo "Erreur : " . $e->getMessage();
    }
    






?>