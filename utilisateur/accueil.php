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
    <title>Recherche de gites</title>
</head>
<body>
<header>
    <?php
    require 'navbar.php';
    ?>
</header>
<main>
    <div class="mainAccueil">
<?php
    require '../Administrateur\initialisation.php';

    @$recherche=$_GET["recherche"];
    @$envoyer=$_GET["envoyer"];
    @$personne=intval($_GET["personne"]);

    if(isset($envoyer)&& !empty(trim($recherche))){

        $sth = $conn->prepare('SELECT * FROM Hebergements WHERE Emplacement_geographique  LIKE "%'.$recherche.'%" AND Nombre_de_couchages >= '.$personne );
        $sth->execute();
        $tab=$sth->fetchall(PDO::FETCH_ASSOC);


        $sth2 = $conn->prepare('SELECT * FROM Hebergements INNER JOIN Categories ON Id_categorie = Categories.Id WHERE Emplacement_geographique LIKE "%'.$recherche.'%"');
        $sth2->execute();
        $tab2=$sth2->fetchAll(PDO::FETCH_ASSOC);
        $afficher='oui';

        $sth1 = $conn->prepare('SELECT Id, Intitule, Disponibilite FROM Hebergements WHERE Disponibilite' );
        $sth1->execute();
        $tab1=$sth1->fetchAll(PDO::FETCH_ASSOC);
    }
?>
    <form method="GET">
        <div class="recherche-container">
            <label for="lieux">Où souhaitez-vous aller?</label>
            <input type="search" name="recherche" placeholder="Destination">
            <input type="number" min=1 name="personne" placeholder="Voyageur (s)">
            <input type="submit" name="envoyer" value="Rechercher">
        </div>
    </form>

    <?php if (@$afficher=='oui'){?>
        <!-- <div id="resultat"></div>
        <div id="nbr"><?=count($tab)."".(count($tab)>1?" résultats trouvés":" résultat trouvé") ?></div> -->
            
        <h2>Liste des hébergements disponibles</h2>
<div class="liste-gite-container">

<?php for($i=0;$i<count($tab);$i++){ ?>
    <?php  if ( $tab[$i]['Disponibilite']==1) { ?>
    <div class="liste-gite-content">

            
            <?=  '<img src= "../images/'. $tab[$i]["Nom1"]. '" alt="photo hébergement">'; ?>
            <p><?php echo  $tab2[$i]["Nom"] .'<br>' . '<br>' ?></p>
            <p><?= $tab[$i]['Intitule'] . '<br>' . '<br>';?></p>
            <p>Lieux : <?php echo $tab2[$i]["Emplacement_geographique"] ?></p>
            <p>Nombre de couchage : <?php echo $tab[$i]["Nombre_de_couchages"] ?></p>
            <p>Tarif : <?php echo $tab[$i]["Prix"] ?>€ par nuit</p>
            <?= '<a href="./fiche.hebergement.php?Id='. $tab[$i]['Id'] . '"> Voir l\'hébergement </a><br>' . '<br>';?>
            </div>
<?php    } ?>
    
<?php } ?>
</div>
        <?php } ?>
        </div>
    </main>
    <?php require 'footer.php';?>
    
</body>

</html>