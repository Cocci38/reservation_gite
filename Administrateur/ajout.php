<?php

require substr(__FILE__, 0, -strlen($_SERVER['SCRIPT_NAME'])).'/Administrateur/initialisation.php';

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
    $sth->bindParam(':Nombre_de_salle_de_bain',$bain);
    $sth->bindParam(':Emplacement_geographique',$lieux);
    $sth->bindParam(':Prix',$prix);
    $sth->execute();

    //header();
    
}
catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}




?>