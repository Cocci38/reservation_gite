<?php




try {

// Création de la base de donnée 

    $sql = "CREATE DATABASE gites";
    $conn->exec($sql);
    echo 'Base de données bien créée !';

} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

?>