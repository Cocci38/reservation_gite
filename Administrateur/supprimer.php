<!DOCTYPE html>
<html lang="fr,en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS\style.admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;500&display=swap" rel="stylesheet">
    <link rel="icon" type="images/png" href="images-memory\black.png">

    <title>Supprimer hébergement </title>
</head>


<body>
    
    
    <a href="index.php"><img class="logo" src="images-memory\logomermory.png" alt="Logo memory"></a> 

    <?php

require 'initialisation.php';
if (empty($_SESSION['result'])) {
    header("location:connexion.php");
    
// echo "Identifiant ou mot de passe incorrect";
}

    try {
       

        // Supprimer le contact


        $result = " DELETE FROM hebergements WHERE Id= ".$_GET['id'] ;
        $sth = $conn->prepare($result);
        $sth->execute();

    

   
echo 'Hébergement surpprimé';}


catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}

 ?>
    </div>

    <?php
  header('Location:indexheb.php');
  exit();
  require 'footer.php';
?>

</body>


</html>