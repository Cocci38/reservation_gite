<?php

require 'initialisation.php';

/* Connexion compte administrateur*/
if (empty($_SESSION['result'])) {
    header("location:connexion.php");


}


/*Modification image*/
/*
if (isset ($_POST)){

    echo 'ok';
    var_dump ($_POST);
    
    echo '<br>';
    
    if (isset ($_FILES['Photo'])) {
        var_dump ($_FILES);

        $tmpName = $_FILES['Photo']['tmp_name'];
        $fileName = $_FILES['Photo']['name'];
        $size=$_FILES['Photo']['size'];
        $error=$_FILES['Photo']['error'];
        $type = $_FILES['Photo']['type'];
    
        $tabeExtention = explode('.',$fileName);
        $extension= strtolower(end($tabeExtention));
    
        $extensionsAutorisees=['jpg', 'jpeg', 'gif', 'png', 'webp'];
        $maxSize=500000;*/

  




       
    

   // if (in_array($extension, $extensionsAutorisees,) && $size <= $maxSize && $error == 0 ) {

/*Supprimer l'image que l'on souhaite modifier */
   // unlink('../images/'.$fileName )

 /*Uploader la nouvelle image*/   
       // move_uploaded_file($tmpName, '../images/'. $fileName); }
       // else {
           // echo 'Mauvaise extension ou taille trop importante ou erreur';
       // }
    
    
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

var_dump($_POST);
echo '<br>';


 /* Si les champs prenom et mail ne sont pas vides et si les donnees ont bien la forme attendue...*/
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
   


   /* if(isset($_POST['envoyer'])){
        $countfiles = count($_FILES['file']['name']);
        for($i=0;$i<$countfiles;$i++){
            $filename = $_FILES['file']['name'][$i];
            $nom[$i+1]=$filename;
            
            unlink('../images/'.$fileName );
    
                move_uploaded_file($_FILES['file']['tmp_name'][$i],'../images/'.$filename);}
    }*/




try{
    //Modifier les hébergements 
    
    $sth = $conn->prepare(" UPDATE hebergements SET Intitule= :Intitule, Id_categorie= :Id_categorie, Description= :Description, Nombre_de_couchages= :Nombre_de_couchages, Nombre_de_salles_de_bain= :Nombre_de_salles_de_bain, Emplacement_geographique= :Emplacement_geographique, Prix= :Prix  where Id= :id"); 
 
 /*for ($i=1;$i<$countfiles+1;$i++){
   

  }*/

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
