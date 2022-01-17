<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

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
        <input type="search" name="recherche" placeholder="recherche un hébergement">
        <input type="submit" name="envoyer">
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
</body>
</html>