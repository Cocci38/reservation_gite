<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="Administrateur\ajout.php" method="post">

        <label for="Intitule"></label>
        <input type="text" name="Nom" id="Intitule" required>

        <label for="Categorie"></label>
        <select name="Type d'hébergement" id="Categorie" required>
            <option value="chambre">Chambre</option>
            <option value="appartement">Appartement</option>
            <option value="mobil_home">Mobil Home</option>
            <option value="maison">Maison</option>
            <option value="villa">Villa</option>
        </select>

        <label for="Description"></label>
        <textarea name="Description" id="Description" cols="30" rows="10" required></textarea>

        <label for="Photo"></label>
        <input type="file" name="Photo" id="Photo" required>

        <label for="Nombre_de_couchages"></label>
        <input type="number" name="Lit" id="Nombre_de_couchages" required>

        <label for="Nombre_de_salles_de_bain"></label>
        <input type="number" name="Salle de bain" id="Nombre_de_salles_de_bain" required>

        <label for="Emplacement_geographique"></label>
        <input type="text" name="Lieux" id="Emplacement_geographique" required>

        <label for="Prix"></label>
        <input type="number" name="Prix" id="Prix" required>

        <div id="submit">
            <input type="submit" value="Envoyer">
        </div>
    </form>
</body>
</html>