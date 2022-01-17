<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
<?php
require '../Administrateur\initialisation.php';

if(isset($_GET['recherche']) && !empty($_GET['recherche'])){
    $recherche = htmlspecialchars($_GET['recherche']);

    $hebergement = $conn->query('SELECT * FROM Hebergements WHERE Emplacement_geographique LIKE "%'.$recherche.'%"');
}else {
    $hebergement = $conn->query('SELECT * FROM Hebergements');
}
?>

    <form method="GET">
        <input type="search" name="recherche" placeholder="recherche un hébergement">
        <input type="submit" name="envoyer">
        </form>

    <section class="afficher_gite">
<?php
if($hebergement->rowCount()>0){
    while($result = $hebergement->fetch()){
        ?>
    <p><?= $result['Emplacement_geographique']; ?></p>
    <?php
    }
}else{
        ?>
    <p>Il n'y a rien</p>
    <?php
    }
    ?>
    </section>
    

</body>
</html>