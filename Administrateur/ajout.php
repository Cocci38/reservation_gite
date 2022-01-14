<?php

require 'initialisation.php';

if (empty($_SESSION['result'])) {
    header("location:connexion.php");}



/* Upload de l'image */



if (isset ($_POST['envoyer'])){

echo 'ok';


if (isset ($_FILES['Photo'])) {
    var_dump($_FILES);

    $tmpName = $FILES['Photo']['tmp_name'];
    $fileName = $_FILES['Photo']['name'];
    $size=$_FILES['Photo']['size'];
    $error=$_FILES['Photo']['error'];
    $type = $_FILES['Photo']['type'];

    $tabeExtention = explode('.',$fileName);
    $extension= strtolower(end($tabeExtention));

    $extensionsAutorisees=['jpg', 'jpeg', 'gif', 'png'];
    $maxSize=50000;

if (in_array($extension, $extensionsAutorisees,) && $size <= $maxSize && $error == 0 ) {

    move_uploaded_file($tmpName, '../images/'. $fileName); }
    else {
        echo 'Mauvaise extension ou taille trop importante ou erreur';
    }

}

}

$intitule = $_POST["Intitule"];
$description = $_POST["Description"];
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
    $sth->bindParam(':Photo', $fileName);
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