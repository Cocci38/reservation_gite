<?php

require "../administrateur\initialisation .php";

try {
    
    
    $sth = $conn->prepare("
    INSERT INTO administrateur (Nom_admin, Mot_de_passe)
    VALUES (:admin, :mot_de_passe)");

  $sth->bindParam(':admin',$admin);
  $sth->bindParam(':mot_de_passe',$mot_de_passe);

  //Insère une première entrée
  $admin = "Ibtissem";
  $mot_de_passe = "Khiri";
  $sth->execute();



}
    
    catch (PDOException $e) {
        echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
    }
    
    
    



?>