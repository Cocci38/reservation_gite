<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test5</title>
</head>
<body>
<form method="POST" action=""> 
    Rechercher un mot : <input type="text" name="recherche">
    <input type="SUBMIT" value="Search!"> 
    </form>


    <?php
    require '../Administrateur\initialisation.php';


     // Récupère la recherche
    $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

     // la requete mysql
    $resultat = $conn->query(
    "SELECT Emplacement_geographique, Nombre_de_couchages FROM Hebergements
    WHERE Emplacement_geographique LIKE '%$recherche%'
    OR Nombre_de_couchages LIKE '%$recherche%'
    LIMIT 10");

     // affichage du résultat
    while($hebergement = $resultat->fetch(PDO::FETCH_OBJ)){
    echo 'Résultat de la recherche: '.$resultat['Emplacement_geographique'].', '.$resultat['Nombre_de_couchages'];
    }
?>
</body>
</html>