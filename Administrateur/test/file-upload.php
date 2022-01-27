<?php

require '../initialisation.php';

/*$sth = $conn->prepare("SELECT * FROM hebergements
LEFT JOIN categories ON hebergements.Id_categorie = categories.Id where hebergements.Id= :id");

$sth -> bindValue (":id" , $_GET['id'] );
$sth->execute();
$result = $sth->fetch();

var_dump($result['id']);


/*Pour upload plusieurs image ou fichier*/ 

/* isset() pour vérifier si le formulaire a été soumis
count pour compter le nombre de fichiers téléchargés
$_FILES['file']['name'] comme paramètre de la fonction count
et l'affecter à la variable $countfiles
Boucle for pour parcourir le fichier téléchargé 
move_uploaded_file($_FILES['file']['tmp_name'][$i],'../images\test/'.$filename) Pour stocker les fichiers télécharger*/
var_dump($_FILES);
if(isset($_POST['submit'])){
    $countfiles = count($_FILES['file']['name']);
    for($i=0;$i<$countfiles;$i++){
        $filename = $_FILES['file']['name'][$i];
        $nom[$i+1]=$filename;
        
        

            move_uploaded_file($_FILES['file']['tmp_name'][$i],'image'.$filename);}
}
echo '<hr>';
var_dump($nom);
echo '<hr>';
try {
    $sth = $conn->prepare("INSERT INTO images(Id_hebergement, Nom1, Nom2, Nom3, Nom4, Nom5)
    VALUES (1, :Nom1, :Nom2, :Nom3, :Nom4, :Nom5)");
    for ($i=1;$i<$countfiles+1;$i++){
        $sth->bindParam(':Nom'.$i,$nom[$i]);}

        $sth->execute();

    

  

    //header();
} 

catch (PDOException $e) {
    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
}



