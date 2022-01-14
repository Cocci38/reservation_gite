<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../CSS\style.utilisateur.css">
<link rel="stylesheet" href="../CSS\style.global.css">
    <title>Document</title>
</head>
<body>
<header>
    <?php
    require 'navbar.php';
    ?>
</header>
<main>
<?php

// Afficher la fiche hébergement

try {

require 'initialisation.php';

    /* Jointure*/

    $sth = $conn->prepare("SELECT * FROM hebergements
    LEFT JOIN categories ON hebergements.Id_categorie = categories.Id where hebergements.Id= :id");

    $sth -> bindValue (":id" , $_GET['id'] );
    $sth->execute();
    $result = $sth->fetch();

    if (isset($result)) {
        echo "Intitulé : " .$result ['Intitule'] ;
        echo " Catégorie : " . $result ['Id_categorie'] ;
        echo " Description : " . $result ['Description'] ;
        echo " Photo : "  . '<img src= "../images/'. $result ['Photo']. '" alt="photo hébergement">';
        echo " Nbr de couchages : " . $result ['Nombre_de_couchages'] ;
        echo " Nbr de salles de bains : " . $result ['Nombre_de_salles_de_bain'] ;
        echo " Emplacement : " . $result ['Emplacement_geographique'] ;
        echo " Prix : " . $result ['Prix'] ;


    }
} catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}


?>
</main>
</body>
</html>