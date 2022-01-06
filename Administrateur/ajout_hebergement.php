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

require substr(__FILE__, 0, -strlen($_SERVER['SCRIPT_NAME'])).'/Administrateur/initialisation.php';
include 'Administrateur\tables\tablehebergement.php';
include 'Administrateur\tables\tablecategorie.php';

$intitule =$_POST["Intitule"];
$categorie =$_POST["Categorie"];
$description =$_POST["Description"];
$photo =$_POST["Photo"];
$couchage =$_POST["Nombre_de_couchages"];
$bain =$_POST["Nombre_de_salles_de_bain"];
$lieux =$_POST["Emplacement_geographique"];
$prix =$_POST["Prix"];

try{
$sth = $conn->prepare("
    INSERT INTO Hebergements(Intitule, Categorie, Description, Photo, Nombre_de_couchages, Nombre_de_salles_de_bain, Emplacement_geographique, Prix,)
    VALUES(:Intitule, :Categorie, :Description, :Photo, :Nombre_de_couchages, :Nombre_de_salles_de_bain, :Emplacement_geographique, :Prix)");
    $sth->bindParam(':Intitule',$intitule);
    $sth->bindParam(':Categorie',$categorie);
    $sth->bindParam(':Description',$description);
    $sth->bindParam(':Photo',$photo);
    $sth->bindParam(':Nombre_de_couchages',$couchage);
    $sth->bindParam(':Nombre_de_salle',$bain);
    $sth->bindParam(':Emplacement_geographique',$lieux);
    $sth->bindParam(':Prix',$prix);
    $sth->execute();

    header();
    
}
?>

    <form action="" method="post">

        <label for="Intitule"></label>
        <input type="text" name="Nom" id="Intitule" required>

        <label for="Categorie"></label>
        <select name="Type d'hébergement" id="Categorie" required>
            <option value="chambre">Chambre</option>
            <option value="appartement">Appartement</option>
            <option value="mobil_home">Mobil Home</option>
            <option value="maison">Maison</option>
            <option value="villa">Villa</option>
        </select>

        <label for="Description"></label>
        <textarea name="Description" id="Description" cols="30" rows="10" required></textarea>

        <label for="Photo"></label>
        <input type="file" name="Photo" id="Photo" required>

        <label for="Nombre_de_couchages"></label>
        <input type="number" name="Lit" id="Nombre_de_couchages" required>

        <label for="Nombre_de_salles_de_bain"></label>
        <input type="number" name="Salle de bain" id="Nombre_de_salles_de_bain" required>

        <label for="Emplacement_geographique"></label>
        <input type="text" name="Lieux" id="Emplacement_geographique" required>

        <label for="Prix"></label>
        <input type="number" name="Prix" id="Prix" required>

        <div id="submit">
            <input type="submit" value="Envoyer">
        </div>
    </form>
</body>
</html>