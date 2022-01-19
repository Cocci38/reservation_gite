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

    <h2>Réservation</h2>
            <form class="reservation" action="reservation.php" method="post">
            <div class = "date">
                    <h3>Vos dates de séjour</h3>
                <div>
                    <label for="arrivee">Du</label>
                    <input type="date" id="arrivee" name="arrivee" required>
                </div>
                <div>
                    <label for="depart">Au</label>
                    <input type="date" id="depart" name="depart" required>
                </div>
                </div>
                <div class = "personne">
                    <h3>Nombres de personnes</h3>
                <div>
                    <label for="adulte">Adulte</label>
                    <input type="text" id="adulte" name="adulte" required>
                </div>
                <div>
                    <label for="enfant">Enfant</label>
                    <input type="text" id="enfant" name="enfant" required>
                </div>
                </div>
                <div class = "corps">
                <div>
                    <label for="titre">Titre</label>
                    <input type="text" id="titre" name="titre" required>
                </div>
                <div>
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="nom" required>
                </div>
                <div>
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" required>
                </div>
                <div>
                    <label for="adresse">Adresse</label>
                    <input type="text" id="adresse" name="adresse"required>
                </div>
                <div>
                    <label for="code_postal">Code Postal</label>
                    <input type="text" id="code_postal" name="code_postal" required>
                </div>
                <div>
                    <label for="ville">Ville</label>
                    <input type="text" id="ville" name="ville" required>
                </div>
                <div>
                    <label for="pays">Pays</label>
                    <input type="text" id="pays" name="pays" required>
                </div>
                <div>
                    <label for="phone">Tel</label>
                    <input type="tel" id="phone" name="telephone" required>
                </div>
                <div>
                    <label for="mail">e-mail</label>
                    <input type="email" id="mail" name="mail" required>
                </div>
                </div>
                <div class="btn">
                <div>
                    <button type="submit">Valider</button>
                </div>
                <div>
                    <a href=fiche.hebergement.php></a><button type = "button" value = "Retour"  onclick = "history.go(-1)">Annuler</button>
                </div>
                </div>
            </form>

        </main>
</body>
</html>