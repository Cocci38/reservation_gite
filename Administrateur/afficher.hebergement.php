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
    
            
                <a href="index.php"><img class="logo" src="" alt=""></a>


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
    }
    
    catch (PDOException $e) {
        echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
    }
    
    
    

                // Afficher la fiche contact

                try {

                    /*require 'initialisation.php';
                    if (empty($_SESSION['result'])) {
                        header("location: administrateur\connexion.php");
                        // echo "Identifiant ou mot de passe incorrect";
                    }*/

                    
                    $sth = $conn->prepare("SELECT * From hebergements where Id= " . $_GET['id'] );
                    $sth->execute();
                    $result = $sth->fetch();
                    echo  $result['Id'];


                    if (isset($result)) {
                        echo "Intitulé : " .$result ['Intitule'] ;
                        echo " Categorie : " . $result ['Categorie'] ;
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