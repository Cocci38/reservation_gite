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

    require '../Administrateur\initialisation.php';

    /* Jointure*/

    $sth = $conn->prepare("SELECT * FROM hebergements");
        $sth->execute();
        $result = $sth->fetch();

        if (isset($result)) { ?>
            <div class="ellipsis-container">
                <div class="row2">
                    <h2><?php echo $result ['Intitule'] ; ?></h2>
                    <p>à <?php echo $result ['Emplacement_geographique'] ; ?></p>
                    <span><?php echo " Catégorie : " . $result ['Id_categorie'] ;?></span>
                    <span><?php echo " Photo : "  . '<img src= "../images/'. $result ['Photo']. '" alt="photo hébergement">'; ?></span>
                    <span>Capacité : <?php echo $result ['Nombre_de_couchages'] ; ?> personne(s)</span>
                    <span>Capacité : <?php echo $result ['Nombre_de_salles_de_bain'] ; ?> salle de bain</span>
                    <span>Description : <?php echo $result ['Description'] ; ?></span>
                    <span>Tarif : <?php echo $result ['Prix'] ; ?>€</span>
                    <a href="reservation.utili.php"><button type="submit">Réservation</button></a>
                    
                    <?php
    }
} catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}


?>
</main>
</body>
</html>