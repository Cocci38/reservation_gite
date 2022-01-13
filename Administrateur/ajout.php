<?php

require 'initialisation.php';

if (empty($_SESSION['result'])) {
    header("location:connexion.php");}


$intitule = $_POST["Intitule"];
$description = $_POST["Description"];
$photo = $_POST["Photo"];
$couchage = $_POST["Nombre_de_couchages"];
$bain = $_POST["Nombre_de_salles_de_bain"];
$lieux = $_POST["Emplacement_geographique"];
$prix = $_POST["Prix"];


try{
$sth = $conn->prepare("
    INSERT INTO hebergements(Intitule, Description, Photo, Nombre_de_couchages, Nombre_de_salles_de_bain, Emplacement_geographique, Prix)
    VALUES(:Intitule, :Description, :Photo, :Nombre_de_couchages, :Nombre_de_salles_de_bain, :Emplacement_geographique, :Prix)");

    $sth->bindParam(':Intitule',$intitule);
    $sth->bindParam(':Description',$description);
    $sth->bindParam(':Photo',$photo);
    $sth->bindParam(':Nombre_de_couchages',$couchage);
    $sth->bindParam(':Nombre_de_salles_de_bain',$bain);
    $sth->bindParam(':Emplacement_geographique',$lieux);
    $sth->bindParam(':Prix',$prix);
    $sth->execute();




    //header();
    
}
catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}








?>