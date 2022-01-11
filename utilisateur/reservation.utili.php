<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation</title>
</head>
<body>
    <?php
    require 'navbar.php';
    ?>
<section>
            <h2>Réservation</h2>
            <form action="reservation.php" method="post">
            <div class = "date">
                    <h4>Vos dates de séjour</h4>
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
                    <h4>Nombres de personnes</h4>
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
                <div class="button">
                    <button type="submit">Valider</button>
                </div>
                <div class="button">
                    <button type="reset">Annuler</button>
                </div>
            </form>
        </section>
</body>
</html>