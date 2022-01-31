<?php
/*try {
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
}*/



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

        /* if(isset($_POST['envoyer'])){
        $countfiles = count($_FILES['file']['name']);
        for($i=0;$i<$countfiles;$i++){
            $filename = $_FILES['file']['name'][$i];
            $nom[$i+1]=$filename;
            
            unlink('../images/'.$fileName );
    
                move_uploaded_file($_FILES['file']['tmp_name'][$i],'../images/'.$filename);}
    }*/

?>