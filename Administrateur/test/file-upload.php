<?php

require '../initialisation.php';

/*Pour upload plusieurs image ou fichier*/ 

/* isset() pour vérifier si le formulaire a été soumis
count pour compter le nombre de fichiers téléchargés
$_FILES['file']['name'] comme paramètre de la fonction count
et l'affecter à la variable $countfiles
Boucle for pour parcourir le fichier téléchargé 
move_uploaded_file($_FILES['file']['tmp_name'][$i],'../images\test/'.$filename) Pour stocker les fichiers télécharger*/

if(isset($_POST['submit'])){
    $countfiles = count($_FILES['file']['name']);
    for($i=0;$i<$countfiles;$i++){
        $filename = $_FILES['file']['name'][$i];
            move_uploaded_file($_FILES['file']['tmp_name'][$i],'image'.$filename);}
}


try {
    $sth = $conn->prepare("INSERT INTO images(Nom)
    VALUES (:Nom)");
    $sth->bindParam(':Nom',$filename);
    $sth->execute();

    //header();
} 

catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}



