<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    
<form action="verifconnexion.php" method="post" >
            

              <label for="identifiant" >Identifiant</label>
              <input type="text" requierd pattern="^[A-Za-z '-]+$"  maxlength="20"  name="Nom_admin" id="Nom_admin" placeholder="Entrer votre identifiant" required>
           
              <label for="motdepasse" >Mot de passe</label>
              <input type="password" requierd pattern="^[A-Za-z '-]+$"  maxlength="20"  name="Mot_de_passe" id="Mot_de_passe" placeholder="Entrer le mot de passe" required>
                 
            <input type="submit" id='submit' value='CONNEXION'>
        

          </form>

        <?php  require 'footer.php'; ?> 

</body>

</html>