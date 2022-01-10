<?php

require 'initialisation.php';


try {

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
