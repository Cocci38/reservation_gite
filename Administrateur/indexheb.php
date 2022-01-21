<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../CSS\style.global.css"> -->
    <link rel="stylesheet" href="../CSS\style.admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;500&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>

<header>

<nav class="container--fluid">
<div class="item">
    <a href="indexheb.php"><img class = "logo" src="../imageeasytrip\Logo_easy_trip.png" alt="logo_easy_trip" srcset=""></a>
</div>
<div class="item">
    <h1>Avec nous voyager facile !</h1>
</div>
</nav>
</header>
<button><a href="deconnexion.php">Deconnexion</a></button> 


<button><a href="../utilisateur\accueil.php">Utilisateur</a></button> 
<button><a href="ajout_hebergement.php">Ajouter un hébergement</a></button> 

<main>
<h2>Liste des hébergements</h2>
<div class="liste">




<?php



try {

 // Connexion  
 require 'initialisation.php';
 // require 'veriflogin.php';

 if (empty($_SESSION['result'])) {
     header("location: connexion.php");
     // echo "Identifiant ou mot de passe incorrect";


 }
 

    $tri = "SELECT * From hebergements ";
    $sth = $conn->prepare($tri);
    $sth->execute();
    $result = $sth->fetchAll();

    /*echo  '<pre>'; var_dump($result); echo '</pre>';*/
   



    for ($y = 0; $y < count($result); $y++) {
        ?>

        <div class="block">
            <?php
        echo "Nom de l'hébergement : ".'<a href="./afficher.hebergement.php?id=' . $result[$y]['Id'] . '">' .  $result[$y]['Intitule'].  '</a><br>';
       
        echo 'Disponibilité : '; 

        if ($result[$y]['Disponibilite']=true) {
            echo "Oui".'<br>';
        }
        else {echo 'Non'.'<br>';}
            
          
        echo "Lieux : " .$result[$y]['Emplacement_geographique'];
        ?>
        </div>

        <?php
    }



}



             catch (PDOException $e) {
                echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
            }

?>
</div>

</main>


</body>
</html>


