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
<?php
    require '../Administrateur\initialisation.php';

    /*@$recherche=$_GET["recherche"];
    @$envoyer=$_GET["envoyer"];

    if(isset($envoyer)&& !empty(trim($recherche))){
        $sth = $conn->prepare('SELECT * FROM Hebergements WHERE Emplacement_geographique LIKE "%'.$recherche.'%" ');
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $sth->execute();
        $tab=$sth->fetchAll();

        $afficher='oui';
    }*/


    @$recherche=$_GET["recherche"];
    @$envoyer=$_GET["envoyer"];
    @$personne=intval($_GET["personne"]);

    if(isset($envoyer)&& !empty(trim($recherche))){
        $sth = $conn->prepare('SELECT * FROM Hebergements WHERE Emplacement_geographique  LIKE "%'.$recherche.'%" AND Nombre_de_couchages >=' .$personne );
        $sth->execute();
        $tab=$sth->fetchAll(PDO::FETCH_ASSOC);

        $sth3 = $conn->prepare('SELECT * FROM Hebergements WHERE Disponibilite=1 ' );
        $sth3->execute();
        $tab=$sth3->fetchAll(PDO::FETCH_ASSOC);



        $sth2 = $conn->prepare('SELECT * FROM Hebergements INNER JOIN Categories ON Id_categorie = Categories.Id WHERE Emplacement_geographique LIKE "%'.$recherche.'%"');
        $sth2->execute();
        $tab2=$sth2->fetchAll(PDO::FETCH_ASSOC);
        $afficher='oui';
    }





?>
    <form method="GET">

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
            <button type="submit" name="recherche" name="valider" value="Search" >Rechercher</button>
        </div>

    </form>

    <?php if (@$afficher=='oui'){?>
        <div id="resultat"></div>
        <div id="nbr"><?=count($tab)."".(count($tab)>1?" résultats trouvés":" résultat trouvé") ?></div>
        <ol>
            <?php for($i=0;$i<count($tab);$i++){ ?>
            <li><?php echo $tab[$i]["Emplacement_geographique"] ?></li>
            <li><?php echo $tab[$i]["Nombre_de_couchages"] ?></li>
            <?php } ?>
        </ol>
        <?php } ?>

    <h2>Des idées pour s'évader ?</h2>
    <div class="container">
    <div class="row1">
        <div class="container_fluid">
            <div class="maison">
            <img src="../images\Maison\Lesterel.jpg" alt="maison l'esterel" srcset="">
            </div>
            <p>L'esterel</p> 
            <p>3 chambres pour 6 personnes</p>
            <p>100€ par nuit</p>
            <a href="istegite.php"><button type='submit'></button></a>
        </div>
    </div>
    <div class="row2">
        <div class=".container_fluid">
            <img src="" alt="" srcset="">
            <p>Nom et lieux</p> 
            <p>Nombre de Chambre + personne</p>
            <p>Tarif</p>
        </div>
    </div>
    <div class="row3">
        <div class=".container_fluid">
            <img src="" alt="" srcset="">
            <p>Nom et lieux</p> 
            <p>Nombre de Chambre + personne</p>
            <p>Tarif</p>
        </div>
</div>
    </div>
    </main>
    <?php require 'footer.php';?>
</body>
</html>