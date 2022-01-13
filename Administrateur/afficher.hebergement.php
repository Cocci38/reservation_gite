<!DOCTYPE html>
<html lang="fr,en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./memory.css" rel="stylesheet">
    <link rel="icon" type="images/png" href="images-memory\black.png">

    <title>Hébergements</title>
</head>



<body>

<button><a href="deconnexion.php">Deconnexion</a></button> 
<button><a href="indexheb.php">Accueil</a></button> 
            
               


                <?php


    

                // Afficher la fiche hébergement

                try {

                require 'initialisation.php';
                    if (empty($_SESSION['result'])) {
                        header("location:connexion.php");
                        // echo "Identifiant ou mot de passe incorrect";
                    }

                    
                    /*$sth = $conn->prepare("SELECT * From hebergements where Id= :id"  );*/

                    $sth = $conn->prepare("SELECT * FROM hebergements
                    LEFT JOIN categories ON hebergements.Id_categorie = categories.Id where hebergements.Id= :id");

                    $sth -> bindValue (":id" , $_GET['id'] );
                    $sth->execute();
                    $result = $sth->fetch();


                    echo   '<a href="modifier.hebergement.php?id='.$_GET['id'].'"><img class="mod" src="images-memory\modifier.png"alt="modifier hébergement"></a>';
                    echo '<a href="supprimer.php?id='. $result['Id'] .'"><img class="suppimg" src="images-memory\corbeille.png" alt="supprimer contact"></a></div>';

                    if (isset($result)) {
                        echo "Intitulé : " .$result ['Intitule'] ;
                        echo " Catégorie : " . $result ['Id_categorie'] ;
                        echo " Description : " . $result ['Description'] ;
                        echo " Photo : " . $result ['Photo'];
                        echo " Nbr de couchages : " . $result ['Nombre_de_couchages'] ;
                        echo " Nbr de salles de bains : " . $result ['Nombre_de_salles_de_bain'] ;
                        echo " Emplacement : " . $result ['Emplacement_geographique'] ;
                        echo " Prix : " . $result ['Prix'] ;


                    }
                } catch (PDOException $e) {
                    echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
                }
 

                ?>
            
    

            </div>
        </div>
    </div>
   
   
        
    

    ?>


</body></html>