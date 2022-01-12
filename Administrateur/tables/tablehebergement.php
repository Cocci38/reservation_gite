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
$sql = "CREATE TABLE Hebergements(
    Id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Id_categorie INT (10),
    Categorie VARCHAR(30) NOT NULL,
    Intitule VARCHAR(30) NOT NULL,
    Description TEXT NOT NULL,
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