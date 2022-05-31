<!DOCTYPE html>
<html lang="fr,en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS\style.admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;500&display=swap" rel="stylesheet">
    <link rel="icon" type="images/png" href="images-memory\black.png">
    <title>Hébergements</title>
</head>

<body>

<header>

<nav class="container--fluid">
<div class="item">
    <a href="index.php"><img class = "logo" src="../imageeasytrip\Logo_easy_trip.png" alt="logo_easy_trip" srcset=""></a>
</div>
<div class="item">
    <h1>Avec nous voyager facile !</h1>
</div>
</nav>
</header>      
    
<button><a href="deconnexion.php">Deconnexion</a></button> 
<button><a href="index.php">Accueil</a></button> 
<button><a href="../utilisateur\accueil.php">Utilisateur</a></button> 
<main>

<?php

// Afficher la fiche hébergement

try {

require 'initialisation.php';

if (empty($_SESSION['result'])) {
    header("location:connexion.php");
    // echo "Identifiant ou mot de passe incorrect";
}
/* Jointure*/
$sth = $conn->prepare("SELECT * FROM hebergements LEFT JOIN categories ON hebergements.Id_categorie = categories.Id where hebergements.Id= :id");

        $sth -> bindValue (":id" , $_GET['id'] );
        $sth->execute();
        $result = $sth->fetch();

    if (isset($result)) {
?>
<div class="fiche_hebergement">
    <span><?php  echo $result ['Intitule'] ;?></span>
    <span><?php  echo " Catégorie : " . $result ['Nom'] ;?></span>
    <span><?php echo " Description : " . $result ['Description'] ;?></span>
    <span><?php echo " Nbr de couchages : " . $result ['Nombre_de_couchages'] ;?></span>
    <span><?php echo " Nbr de salles de bains : " . $result ['Nombre_de_salles_de_bain'] ;?></span>
    <span><?php echo " Emplacement : " . $result ['Emplacement_geographique'] ;?></span>
    <span><?php echo " Prix : " . $result ['Prix'] ;?></span>
    <span><?php echo " Photo 1 : "  . '<img src= "../images/'. $result ['Nom1']. '" alt="photo hébergement">';?></span>
    <span><?php echo " Photo 2 : "  . '<img src= "../images/'. $result ['Nom2']. '" alt="photo hébergement">';?></span>
    <span><?php echo " Photo 3 : "  . '<img src= "../images/'. $result ['Nom3']. '" alt="photo hébergement">';?></span>
    <span><?php echo " Photo 4 : "  . '<img src= "../images/'. $result ['Nom4']. '" alt="photo hébergement">';?></span>
    <span><?php echo " Photo 5 : "  . '<img src= "../images/'. $result ['Nom5']. '" alt="photo hébergement">';?></span>

    <div class="btn-crud">
        <button> <?php echo'<a href="modifier.hebergement.php?id='.$_GET['id'].'"">Modifier hébergement</a>'; ?></button>

        <button><?php echo'<a href="supprimer.php?id='. $_GET['id'] .'">Supprimer hébergement</a>';?></button>
    </div>             
</div>    
<?php

}
} catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}
?>
            </div>
        </div>
    </div>
    </main>
    <?php require 'footer.php';?>

</body></html>