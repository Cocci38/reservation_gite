<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../CSS\style.utilisateur.css">
<link rel="stylesheet" href="../CSS\style.global.css">
    <title>Fiche de l'hébergement</title>
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

    $lien = $conn->prepare('SELECT * FROM Hebergements INNER JOIN Categories ON Id_categorie = Categories.Id');
        $lien->execute();
        $result = $lien->fetch();

        if (isset($result)) { ?>
            <div class="fiche-gite-container">
                <div class="nom-gite">
                    <h2><?php echo $result ['Intitule'] ; ?></h2>
                    <p class="categorie-lieux"><?php echo $result ['Nom'] . " à " . $result ['Emplacement_geographique'] ; ?></p>
                </div>
                <div class="photo-capacite">
                    <span><?php echo " Photo : "  . '<img src= "../images/'. $result ['Photo']. '" alt="photo hébergement">'; ?></span>
                    <span class="capacite">
                        <div class="personne">Capacité : <?php echo $result ['Nombre_de_couchages'] . " personne( s )"  ; ?></div>
                        <div class="bain"></li> Salle de bain : <?php echo $result ['Nombre_de_salles_de_bain'] ; ?></div></span>
                </div>
                    <span class="description">
                        <h3>Description : </h3>
                        <div class="description-resultat"><?php echo $result ['Description'] ; ?>
                        </div></span>
                    <span class="tarif">Tarif : <?php echo $result ['Prix'] ; ?>€
                    <a href="reservation.utili.php"><button type="submit">Réservation</button></a>
                    </span>
                </div>
                    <?php
    }
} catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}


?>
</main>
</body>
</html>