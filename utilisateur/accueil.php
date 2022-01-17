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

    @$recherche=$_GET["recherche"];
    @$envoyer=$_GET["envoyer"];

    if(isset($envoyer)&& !empty(trim($recherche))){
        $sth = $conn->prepare('SELECT * FROM Hebergements WHERE Emplacement_geographique LIKE "%'.$recherche.'%"');
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $sth->execute();
        $tab=$sth->fetchAll();

        $afficher='oui';
    }

?>
    <form method="GET">
        <label for="lieux">Où souhaitez-vous aller?</label>
        <input type="search" name="recherche" placeholder="recherche un hébergement">
        <input type="submit" name="envoyer" value="Rechercher">
        </form>

    <?php if (@$afficher=='oui'){?>
        <div id="resultat"></div>
        <div id="nbr"><?=count($tab)."".(count($tab)>1?" résultats trouvés":" résultat trouvé") ?></div>
            

            

        <h2>Liste des hébergements disponibles</h2>
<div class="container">
<?php for($i=0;$i<count($tab);$i++){ ?>
    <div class="row1">
        <div class="item">
            <img src="" alt="" srcset="">
            <p><?php echo $tab[$i]["Id_Categorie"] ?></p>
            <p><?php echo $tab[$i]["Emplacement_geographique"] ?></p>
            <p><?php echo $tab[$i]["Nombre_de_couchages"] ?></p>
            <p><?php echo $tab[$i]["Prix"] ?></p>
        </div>
    </div>

<?php } ?>
</div>
        <?php } ?>
    </main>
</body>
</html>