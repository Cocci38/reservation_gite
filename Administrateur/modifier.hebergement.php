<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS\style.admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;500&display=swap" rel="stylesheet">

    <title>Modifier hébergement</title>
</head>

<body>
   
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


    <?php


    require 'initialisation.php';

    if (empty($_SESSION['result'])) {
        header("location:connexion.php");
    }

    try {

        if (!empty($_GET['id']) && isset($_GET['id'])) {

            $sth = $conn->prepare("SELECT * From hebergements where Id= :id");
            $sth->bindValue(":id", $_GET['id']);
            $sth->execute();
            $result = $sth->fetch(PDO::FETCH_ASSOC);

        } else {

            header('location: indexheb.php');
        }
    } catch (PDOException $e) {
        echo 'Impossible de traiter les données. Erreur : ' . $e->getMessage();
    }


    ?>

<button><a href="indexheb.php">Accueil</a></button>

<button><a href="deconnexion.php">Deconnexion</a></button>


<button><a href="../utilisateur\listegite.php">Utilisateur</a></button>
    <main>
        <div class="admin-update">
        <form action='modifier.php' method="post" enctype="multipart/form-data">
                    <input type="hidden" name="Id" value="<?php echo $result['Id']; ?>">

            <div class="container-update">
               
                    <div class="update-item1">
                        <label for="Intitule">Nom de l'hébergement</label>
                        <input type="text" name="Intitule" value="<?php echo $result['Intitule'];  ?>" id="Intitule" required>
                    </div>
                    <div class="update-item2">
                        <label for="Categorie">Type d'hébergement</label>
                        <select name="Id_categorie" value="<?php echo $result['Categorie']; ?>" id="Id_categorie" required>
                            <?php $sth = $conn->prepare("SELECT * From categories");
                            $sth->execute();
                            $resultC = $sth->fetchall();
                            for ($i = 0; $i < count($resultC); $i++) {
                                echo '<option value=' . $resultC[$i]['Id'] . '>' . $resultC[$i]['Nom'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="update-item3">
                        <label for="Description">Description</label>
                        <textarea name="Description" id="Description" cols="30" rows="10" required><?php echo $result['Description']; ?></textarea>
                    </div>
                    <div class="update-item4">
                        <label for="Photo">Photos</label>
                        <input type="file" name="Photo" id="Photo" required> <?= '<img src= "../images/' . $result['Photo'] . '" alt="photo hébergement">'; ?>
                    </div>
                    <div class="update-item5">
                        <label for="Nombre_de_couchages">Nombres de lits</label>
                        <select name="Nombre_de_couchages" value="<?php echo $result["Nombre_de_couchages"]; ?>" id="Nombre_de_couchages" required>
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
                    <div class="update-item6">
                        <label for="Nombre_de_salles_de_bain">Salle(s) de bain</label>
                        <select name="Nombre_de_salles_de_bain" value="<?php echo $result["Nombre_de_salles_de_bain"];  ?>" id="Nombre_de_salles_de_bain" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                        </select>
                    </div>
                    <div class="update-item7">
                        <label for="Emplacement_geographique">Lieux</label>
                        <input type="text" name="Emplacement_geographique" value="<?php echo $result["Emplacement_geographique"]; ?>" id="Emplacement_geographique" required>
                    </div>
                    <div class="update-item8">
                        <label for="Prix">Prix</label>
                        <input type="number" name="Prix" value="<?php echo $result["Prix"]; ?>" id="Prix" required>
                    </div>
                    <div class="update-item9">
                        <div id="submit">
                            <input type="submit" value="Envoyer">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <main>
       <?php require 'footer.php'; ?>
</body>

</html>