<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../CSS\style.utilisateur.css">
<link rel="stylesheet" href="../CSS\style.global.css">
    <title>Réservation</title>
</head>
<body>
    <header>
    <?php
    require 'navbar.php';
    ?>
    </header>
    <main>
    <?php
try{
    require '../Administrateur\initialisation.php';

$sth2 = $conn->prepare("SELECT Id, Intitule, Emplacement_geographique FROM hebergements where Id= :id");
$sth2 -> bindValue (":id" , $_GET['Id'] );
$sth2->execute();
$resultat = $sth2->fetch(PDO::FETCH_ASSOC);
var_dump( $_GET['Id'])

?>
<h2><?php echo $resultat ['Intitule'] ; ?></h2>
    <?php echo  " en " . $resultat ['Emplacement_geographique'] ; ?></p>


    <h2>Réservation</h2>
            <form class="reservation-container" action="reservation.php" method="post">
            
            <div class = "date">
                    <h3>Vos dates de séjour</h3>
                <div class="arrive-depart">
                <div class="arrive">
                    <label for="arrivee">Du</label>
                    <input type="date" id="arrivee" name="arrivee" required>
                </div>
                <div class="depart">
                    <label for="depart">Au</label>
                    <input type="date" id="depart" name="depart" required>
                </div>
                </div>
            </div>
                <div class = "personne">
                    <h3 class="nb-personne">Nombres de personnes</h3>
                    <div class="nombre-personne">
                <div class="adulte">
                    <label for="adulte">Adulte</label>
                    <input type="text" id="adulte" name="adulte" required>
                </div>
                <div class="enfant">
                    <label for="enfant">Enfant</label>
                    <input type="text" id="enfant" name="enfant" required>
                </div>
                </div>
                </div>
                <div class = "corps">
                    <h3 class="vos-coordonnees">Vos coordonnées</h3>
                <div class="coordonne">
                    <div class="item1">
                    <label for="titre">Titre</label>
                    <input type="text" id="titre" name="titre" required>
                    </div>
                    <div class="item2">
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="nom" required>
                    </div>
                    <div class="item3">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" required>
                    </div>
                    <div class="item4">
                    <label for="adresse">Adresse</label>
                    <input type="text" id="adresse" name="adresse"required>
                    </div>
                    <div class="item5">
                    <label for="code_postal">Code Postal</label>
                    <input type="text" id="code_postal" name="code_postal" required>
                    </div>
                    <div class="item6">
                    <label for="ville">Ville</label>
                    <input type="text" id="ville" name="ville" required>
                    </div>
                    <div class="item7">
                    <label for="pays">Pays</label>
                    <input type="text" id="pays" name="pays" required>
                    </div>
                    <div class="item8">
                    <label for="phone">Téléphone</label>
                    <input type="tel" id="phone" name="telephone" required>
                    </div>
                    <div class="item9">
                    <label for="mail">e-mail</label>
                    <input type="email" id="mail" name="mail" required>
                    </div>
                </div>
                </div>
                <div class="btn">
                <div>
                    <button class="envoyer" type="submit" name="envoyer" >Valider</button>
                    <input type="hidden" name="$_GET['Id']">
                </div>
                <div>
                <button class="retour2" type = "button" value = "Retour"  onclick = "history.go(-1)">Retour</button>
                </div>
                </div>
            </form>
            <?php
            
}
catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
}
?>
        </main>
</body>
</html>