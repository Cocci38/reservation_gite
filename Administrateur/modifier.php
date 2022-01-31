<?php

require 'initialisation.php';

/* Connexion compte administrateur*/
if (empty($_SESSION['result'])) {
    header("location:connexion.php");
}

// Préparation de la requête pour modifier les hébergements en la sécurisant

$intitule = valid_donnees($_POST["Intitule"]);
$id_categorie= valid_donnees($_POST["Id_categorie"]);
$description = valid_donnees($_POST["Description"]);
$couchage = valid_donnees($_POST["Nombre_de_couchages"]);
$bain = valid_donnees($_POST["Nombre_de_salles_de_bain"]);
$lieux = valid_donnees($_POST["Emplacement_geographique"]);
$prix = valid_donnees($_POST["Prix"]);

//   Validation des données du formulaire sur serveur via les trois fonctions

function valid_donnees($donnees)
{
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}

 /* Si les champs prenom et mail ne sont pas vides et si les donnees ont bien la forme attendue...*/
 if(!empty($intitule)
 && strlen ($intitule) <= 20
 //&& preg_match("/^[A-Za-zéè '-]+$/",$intitule)
   && !empty($id_categorie) 
   && !empty($description)
   && strlen ($description) <= 300
   //&& preg_match("/^[A-Za-zéè '-]+$/",$description)
   && !empty($couchage)
   && !empty($bain) 
   && !empty($lieux)
   && strlen ($lieux) <= 20
   //&& preg_match("/^[A-Za-zéè '-]+$/",$lieux)
   && !empty($prix))

try{
    //Modifier les hébergements 

$sth = $conn->prepare(" UPDATE hebergements SET Intitule= :Intitule, Id_categorie= :Id_categorie, Description= :Description, Nombre_de_couchages= :Nombre_de_couchages, Nombre_de_salles_de_bain= :Nombre_de_salles_de_bain, Emplacement_geographique= :Emplacement_geographique, Prix= :Prix  where Id= :id"); 

        $sth->bindParam(':Intitule',$intitule);
        $sth->bindParam(':Id_categorie',$id_categorie);
        $sth->bindParam(':Description',$description);
        $sth->bindParam(':Nombre_de_couchages',$couchage);
        $sth->bindParam(':Nombre_de_salles_de_bain',$bain);
        $sth->bindParam(':Emplacement_geographique',$lieux);
        $sth->bindParam(':Prix',$prix);
        $sth->bindParam(':id', $_POST['Id']);

        $sth->execute();
    
        header('Location: indexheb.php');
}
catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}
    
die;


?>
