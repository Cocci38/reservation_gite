<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS\style.admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;500&display=swap" rel="stylesheet">

    <title>Ajouter hébergement</title>
</head>

<body>
    <button><a href="deconnexion.php">Deconnexion</a></button>
    <button><a href="indexheb.php">Accueil</a></button>

    <header>



        <nav class="container--fluid">
            <div class="item">
                <a href="indexheb.php"><img class="logo" src="../imageeasytrip\Logo_easy_trip.png" alt="logo_easy_trip" srcset=""></a>
            </div>
            <div class="item">
                <h1>Avec nous voyager facile !</h1>
            </div>
        </nav>
    </header>


    <main>
        <div class="admin-content">

            <?php require 'initialisation.php'; ?>

            <a href="categorie.php">Ajouter catégorie </a>
            <form action='ajout.php' method="post" enctype="multipart/form-data">
            <div class="container-forms">
            
                    <div class="container-item1">
                        <label for="Intitule">Nom de l'hébergement</label>
                        <input type="text" name="Intitule" id="Intitule" required>
                    </div>
                    <div class="container-item2">
                        <label for="Categorie">Type d'hébergement</label>
                        <select name="Id_categorie" id="Id_categorie" required>
                            <?php $sth = $conn->prepare("SELECT * From categories");
                            $sth->execute();
                            $result = $sth->fetchall();
                            for ($i = 0; $i < count($result); $i++) {
                                echo '<option value=' . $result[$i]['Id'] . '>' . $result[$i]['Nom'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="container-item3">
                        <label for="Description">Description</label>
                        <textarea name="Description" id="Description" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="container-item4">

                        <label for="Photo">Photos</label>
                        <input type="file" name="Photo" id="Photo" required>
                    </div>
                    <div class="container-item5">

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
                    </div>
                    <div class="container-item6">
                        <label for="Nombre_de_salles_de_bain">Salle(s) de bain</label>
                        <select name="Nombre_de_salles_de_bain" id="Nombre_de_salles_de_bain" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                    <div class="container-item7">
                        <label for="Emplacement_geographique">Lieux</label>
                        <input type="text" name="Emplacement_geographique" id="Emplacement_geographique" required>
                    </div>
                    <div class="container-item8">

                        <label for="Prix">Prix</label>
                        <input type="number" name="Prix" id="Prix" required>
                    </div>
                    <div class="container-item9">
                        <div id="submit">
                            <input type="submit" name="envoyer" value="Envoyer">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>

</html>