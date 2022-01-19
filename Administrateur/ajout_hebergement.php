<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter hébergement</title>
</head>
<body>

<?php require 'initialisation.php'; ?>

    <form action= 'ajout.php' method="post" enctype="multipart/form-data">

        <label for="Intitule">Nom de l'hébergement</label>
        <input type="text" name="Intitule" id="Intitule" required>

        <label for="Categorie">Type d'hébergement</label>
        <select name="Id_categorie" id="Id_categorie" required>
        <?php $sth = $conn->prepare("SELECT * From categories" );
                    $sth->execute();
                    $result = $sth->fetchall(); 
                 for ($i= 0; $i<count($result); $i++) {
                echo '<option value='.$result[$i]['Id'].'>'.$result[$i]['Nom'].'</option>';
                 }
                    ?>
        </select>

        <label for="Description">Description</label>
        <textarea name="Description" id="Description" cols="30" rows="10" required></textarea>

        <label for="Photo">Photos</label>
        <input type="file" name="Photo" id="Photo" required>

        <label for="Nombre_de_couchages">Nombres de lits</label>
        <select name="Nombre_de_couchages" id="Nombre_de_couchages" required>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>

        <label for="Nombre_de_salles_de_bain">Salle(s) de bain</label>
        <select name="Nombre_de_salles_de_bain" id="Nombre_de_salles_de_bain" required>
            <option value="1">1</option>
            <option value="2">2</option>
        </select>

        <label for="Emplacement_geographique">Lieux</label>
        <input type="text" name="Emplacement_geographique" id="Emplacement_geographique" required>

        <label for="Prix">Prix</label>
        <input type="number" name="Prix" id="Prix" required>

        <div id="submit">
            <input type="submit" name= "envoyer" value="Envoyer">
        </div>
    </form>
</body>
</html>