<?php
try {
    // Overture session :
    
    session_start();
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "reservation";
    
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sth = $conn->prepare("
    INSERT INTO Users Administrateur (Nom_admin, Mot_de_passe)
    VALUES (:admin, :mot_de_passe)
  ");
  $sth->bindParam(':admin', $admin);
  $sth->bindParam(':mot_de_passe', $mot_de_passe);

  //Insère une première entrée
  $admin = "Sandra"; $mot_de_passe = "villot";
  $sth->execute();



}
    
    catch (PDOException $e) {
        echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
    }
    
    
    



?>