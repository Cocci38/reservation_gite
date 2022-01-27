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

    $lien = $conn->prepare("SELECT * FROM hebergements where Id= :id");
    $lien -> bindValue (":id" , $_GET['Id'] );
        $lien->execute();
        $result = $lien->fetch(PDO::FETCH_ASSOC);
        $sth3 = $conn->prepare("SELECT Nom FROM categories WHERE Id =". $result['Id_categorie']);
        $sth3->execute();
        $resultat2 =$sth3->fetch(PDO::FETCH_ASSOC);


        if (isset($result)) { ?>
            <div class="fiche-gite-container">
                <div class="nom-gite">
                    <h2><?php echo $result ['Intitule'] ; ?></h2>
                    <p class="categorie-lieux"><?php echo $resultat2 ['Nom'] . " en " . $result ['Emplacement_geographique'] ; ?></p>

                    <?= '<img src= "../images/'. $result ['Photo']. '" alt="photo hébergement">'; ?>

                    <p>Capacité : <?php echo $result ['Nombre_de_couchages'] . " personne( s )" . "  /  "  ; ?>Salle de bain : <?php echo $result ['Nombre_de_salles_de_bain'] ; ?>
                    </p>
                    <h3>Description : </h3>
                    <div class="description-resultat"><?php echo $result ['Description'] ; ?>
                    </p>
                    <p>Tarif : <?php echo $result ['Prix'] ; ?>€ par nuit
                    </p>
                    <button ><?= '<a href="./reservation.utili.php?Id='. $result['Id'] . '"> Réserver </a><br>' . '<br>';?></button>
                    <button type = "button" value = "Retour"  onclick = "history.go(-1)">Retour</button>
                </div>
            </div>
                    <?php
    }
} catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}


?>
</main>
<?php require 'footer.php';?>
</body>
</html>