<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<button><a href="indexheb.php">Accueil</a></button> 
<button><a href="../utilisateur\accueil.php">Utilisateur</a></button> 

<div class="form-categorie">
<form action= '' method="post">
    <div class="categorie">
        <label for="Nom">Nom de la catégorie</label>
        <input type="text" name="Nom" id="Nom" required>
        <input type="submit" value="Envoyer">
    </div>
</form>
</div>
<?php

require 'initialisation.php';

if (empty($_SESSION['result'])) {
    header("location:connexion.php");}

    try{
        if (!empty ($_POST["Nom"])) {
                $nom = $_POST["Nom"];

                $sth = $conn->prepare("INSERT INTO categories (Nom)
                    VALUES (:Nom)");

                $sth->bindParam(':Nom',$nom);
                $sth->execute();
        }
    }
catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}

require 'footer.php'; 
?>


</body>
</html>