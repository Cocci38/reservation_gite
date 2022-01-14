<?php

require 'initialisation.php';

if (empty($_SESSION['result'])) {
    header("location:connexion.php");}


$intitule = $_POST["Intitule"];
$description = $_POST["Description"];

/* Upload de l'image */

$photo = $_POST["Photo"];

/*$maxSize=50000;
$validExt= array ('.jpg', '.jpeg', '.gif', '.png'); 

    if ($_FILES ['Photo']['error'] ){   

    echo 'Une erreur est survenue lors du transfert ';
    die;}

    $fileSize = $_FILES ['Photo']['size'];
        if ($fileSize > $maxSize) {

            echo 'Le fichier est trop gros';
            die;
        }
    $fileName = $_FILES ['Photo']['name'];

    $fileExt='.'. strtolower(substr(strrchr($fileName, '.'), 1));
    if (in_array($fileExt, $validExt)){

        echo "Le fichier n'est pas une image !";
        die; 
    }
    $tmpName = $FILES['Photo']['tmp_name'];
    $uniqueName = md5(uniqid(rand(),true));
    $fileName = 'images/'. $uniqueName . $fileExt;
    $resultat = move_uploaded_file($tmpName, $fileName);

    if ($resultat) {
        echo 'transfert terminé';
    }*/



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