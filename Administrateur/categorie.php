<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action= '' method="post">

        <label for="Nom">Nom de la catégorie</label>
        <input type="text" name="Nom" id="Nom" required>
        <input type="submit" value="Envoyer">

        </form>




<?php

require 'initialisation.php';

if (empty($_SESSION['result'])) {
    header("location:connexion.php");}

       

        try 
        {
            if (!empty ($_POST["Nom"])) {

                $nom = $_POST["Nom"];

                $sth = $conn->prepare("
                INSERT INTO categories (Nom)
                VALUES (:Nom)");
    
                $sth->bindParam(':Nom',$nom);
                $sth->execute();

            }

        

        }

    
    catch (PDOException $e) {
        echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
    }
    
?>


</body>
</html>