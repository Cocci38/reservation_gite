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
    <title>Recherche de gites</title>
</head>
<body>
<header>
    <?php
    require 'navbar.php';
    ?>
</header>
<main>
    <form action= "test4.php" method="GET">

        <label for="lieux">Où souhaitez-vous aller?</label>
        <input type="text" name="Emplacement_geographique" id="lieux" required>

        <label for="arrivee">Arrivée</label>
        <input type="date" name="arrivee" id="arrivee" required>

        <label for="depart">Départ</label>
        <input type="date" name="depart" id="depart" required>

        <label for="voyageur">Voyageur(s)</label>
        <select name="Nombre_de_couchages" id="voyageur" required>
            <option value="1">1 Voyageur</option>
            <option value="2">2 Voyageurs</option>
            <option value="3">3 Voyageurs</option>
            <option value="4">4 Voyageurs</option>
            <option value="5">5 Voyageurs</option>
            <option value="6">6 Voyageurs</option>
            <option value="7">7 Voyageurs</option>
            <option value="8">8 Voyageurs</option>
            <option value="9">9 Voyageurs</option>
            <option value="10">10 et plus</option>
        </select>

        <div>
            <a href = ''><button type="submit" name="recherche" value="Search" >Rechercher</button></a>
        </div>

    </form>

    <h2>Des idées pour s'évader ?</h2>
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
            <p>Nom et lieux</p> 
            <p>Nombre de Chambre + personne</p>
            <p>Tarif</p>
        </div>
</div>
    </div>
    </main>
</body>
</html>