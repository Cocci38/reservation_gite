<?php

require 'initialisation.php';
/*Connexion compte administrateur */

if (empty($_SESSION['result'])) {
    header("location:connexion.php");}



/* Upload de l'image */

/*if (isset ($_POST['envoyer'])){

echo 'ok';


if (isset ($_FILES['Photo'])) {
foreach ($_FILES as $file)

    var_dump($file);

    $tmpName = $_FILES['Photo']['tmp_name'];
    $fileName = $_FILES['Photo']['name'];
    $size=$_FILES['Photo']['size'];
    $error=$_FILES['Photo']['error'];
    $type = $_FILES['Photo']['type'];

    $tabeExtention = explode('.',$fileName);
    $extension= strtolower(end($tabeExtention));

    $extensionsAutorisees=['jpg', 'jpeg', 'gif', 'png', 'webp'];
    $maxSize=200000;

if (in_array($extension, $extensionsAutorisees,) && $size <= $maxSize && $error == 0 ) {

    move_uploaded_file($tmpName, '../images/'. $fileName); }
    else {
        echo 'Mauvaise extension ou taille trop importante ou erreur';
    }

}

}
/* Préparation de la requête avec validation des données du formulaire*/ 






var_dump($_FILES);
if(isset($_POST['envoyer'])){
    $countfiles = count($_FILES['file']['name']);
    for($i=0;$i<$countfiles;$i++){
        $filename = $_FILES['file']['name'][$i];
        $nom[$i+1]=$filename;
        
        

            move_uploaded_file($_FILES['file']['tmp_name'][$i],'../images/'.$filename);}
}
echo '<hr>';
var_dump($nom);
echo '<hr>';


/*
try {
    $sth = $conn->prepare("INSERT INTO hebergements(Nom1, Nom2, Nom3, Nom4, Nom5)
    VALUES (:Nom1, :Nom2, :Nom3, :Nom4, :Nom5)");
    for ($i=7;$i<$countfiles+1;$i++){
        $sth->bindParam(':Nom'.$i,$nom[$i]);
    
      }
    
        $sth->execute();

    

  

    //header();
} 

catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}
*/





$intitule = valid_donnees ($_POST["Intitule"]);
$id_categorie= valid_donnees($_POST["Id_categorie"]) ;
$description = valid_donnees( $_POST["Description"]);
$couchage = valid_donnees($_POST["Nombre_de_couchages"]);
$bain = valid_donnees($_POST["Nombre_de_salles_de_bain"]);
$lieux = valid_donnees($_POST["Emplacement_geographique"]);
$prix = valid_donnees($_POST["Prix"]);

/*Validation des données du formulaire sur serveur via les trois fonctions*/

function valid_donnees($donnees){
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}



try{

    /*On insère les données reçues si les champs sont correctement remplis (contrer les attaques XXS et l'injection)*/ 

    if(!empty($intitule)
    && strlen ($intitule) <= 20
    && preg_match("/^[A-Za-zéè '-]+$/",$intitule)
      && !empty($id_categorie) 
      && !empty($description)
      && strlen ($description) <= 300
      && preg_match("/^[A-Za-zéè '-]+$/",$description)
      && !empty($couchage)
      && !empty($bain) 
      && !empty($lieux)
      && strlen ($lieux) <= 20
      && preg_match("/^[A-Za-zéè '-]+$/",$lieux)
      && !empty($prix))
      
      {

        /*Requête pour insérer des données */

$sth = $conn->prepare ("INSERT INTO hebergements (Intitule, Id_categorie, Description, Nombre_de_couchages, Nombre_de_salles_de_bain, Emplacement_geographique, Prix, Nom1, Nom2, Nom3, Nom4, Nom5)
    VALUES(:Intitule, :Id_categorie, :Description, :Nombre_de_couchages, :Nombre_de_salles_de_bain, :Emplacement_geographique, :Prix, :Nom1, :Nom2, :Nom3, :Nom4, :Nom5)");

for ($i=1;$i<$countfiles+1;$i++){
    $sth->bindParam(':Nom'.$i,$nom[$i]);

  }


/*$sth = $conn->prepare("INSERT INTO hebergements (Id_categorie) SELECT Nom FROM categories VALUES(:Id_categorie)");*/

    $sth->bindParam(':Intitule',$intitule);
    $sth->bindParam(':Id_categorie',$id_categorie);
    $sth->bindParam(':Description',$description);
    $sth->bindParam(':Nombre_de_couchages',$couchage);
    $sth->bindParam(':Nombre_de_salles_de_bain',$bain);
    $sth->bindParam(':Emplacement_geographique',$lieux);
    $sth->bindParam(':Prix',$prix);
   
    $sth->execute();
    }

/*Retour à la page d'accueil*/
   /* header('Location: indexheb.php');*/

    
}
catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}








?>