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
    <title>Liste des hébergements</title>
</head>
<body>
<header>
    <?php
    require 'navbar.php';
    require 'test4.php'
    ?>
</header>
<main>
<h2>Liste des hébergements disponibles</h2>
<div class="container">
    <div class="row1">
        <div class="item">
            <img src="" alt="" srcset=""> 
            <p>Nom et lieux</p> 
            <p>Nombre de Chambre + personne</p>
            <p>Tarif</p>
        </div>
    </div>
    <div class="row2">
        <div class="item">
            <img src="" alt="" srcset="">
            <p>Nom et lieux</p> 
            <p>Nombre de Chambre + personne</p>
            <p>Tarif</p>
        </div>
    </div>
    <div class="row3">
        <div class="item">
            <img src="" alt="" srcset="">
            <p><?= $result['Emplacement_geographique']; ?></p>
            <p>Nombre de Chambre + personne</p>
            <p>Tarif</p>
        </div>
</div>
<div class="row4">
        <div class="item">
            <img src="" alt="" srcset="">
            <p>Nom et lieux</p> 
            <p>Nombre de Chambre + personne</p>
            <p>Tarif</p>
        </div>
</div>
<div class="row5">
        <div class="item">
            <img src="" alt="" srcset="">
            <p>Nom et lieux</p> 
            <p>Nombre de Chambre + personne</p>
            <p>Tarif</p>
        </div>
</div><div class="row6">
        <div class="item">
            <img src="" alt="" srcset="">
            <p>Nom et lieux</p> 
            <p>Nombre de Chambre + personne</p>
            <p>Tarif</p>
        </div>
</div>
</div>
<div>
    <a href = 'recherche.hebergement.php'><button type="submit">Nouvelle recherche</button></a>
</div>
</main>
</body>
</html>