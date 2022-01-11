<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche de gites</title>
</head>
<body>

    <?php
    require 'navbar.php';
    require 'recherche.class.php';
    ?>
    <form action= '' method="post">

        <label for="lieux">Où souhaitez-vous aller?</label>
        <input type="text" name="lieux" id="lieux" required>

        <label for="arrive">Arrivée</label>
        <input type="date" name="arrive" id="arrive" required>

        <label for="depart">Départ</label>
        <input type="date" name="depart" id="depart" required>

        <label for="voyageur">Voyageur(s)</label>
        <select name="voyageur" id="voyageur" required>
            <option value="1">1 Voyageur</option>
            <option value="2">2 Voyageurs</option>
            <option value="3">3 Voyageurs</option>
            <option value="4">4 Voyageurs</option>
            <option value="5">5 Voyageurs</option>
            <option value="6">6 Voyageurs</option>
            <option value="7">7 Voyageurs</option>
            <option value="8">8 Voyageurs</option>
            <option value="9">9 Voyageurs</option>
            <option value="10">10 et plus</option>
        </select>

    </form>

    <h3>Des idées pour s'évader ?</h3>
    <div>mettre un hébergement comme idée et rajouter un lien vers sa fiche</div>
    <div>mettre un hébergement comme idée et rajouter un lien vers sa fiche</div>
    <div>mettre un hébergement comme idée et rajouter un lien vers sa fiche</div>
</body>
</html>