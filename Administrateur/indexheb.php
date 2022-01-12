<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<button><a href="deconnexion.php">Deconnexion</a></button> 

<?php




try {

 // Connexion  
 require 'initialisation.php';
 // require 'veriflogin.php';

 if (empty($_SESSION['result'])) {
     header("location: connexion.php");
     // echo "Identifiant ou mot de passe incorrect";


 }
 

    $tri = "SELECT * From hebergements ";
    $sth = $conn->prepare($tri);
    $sth->execute();
    $result = $sth->fetchAll();

    /*echo  '<pre>'; var_dump($result); echo '</pre>';*/

    for ($y = 0; $y < count($result); $y++) {

        echo '<a href="./afficher.hebergement.php?id=' . $result[$y]['Id'] . '">' .  $result[$y]['Intitule']. '</a><br>' . '<br>';
    }

 

}

             catch (PDOException $e) {
                echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
            }

?>
  
</body>
</html>


