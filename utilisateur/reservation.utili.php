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
            <h2>Nous contacter</h2>
            <form action="url">
                <div>
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="user_name">
                </div>
                <div>
                    <label for="mail">e-mail</label>
                    <input type="email" id="mail" name="user_mail">
                </div>
                <div>
                    <label for="phone">Tel</label>
                    <input type="tel" id="phone" name="user_phone">
                </div>
                <div>
                    <label for="msg">Message</label>
                    <textarea name="user_message" id="msg" cols="30" rows="10"></textarea>
                </div>
                <div class="button">
                    <button type="submit">Envoyer le message</button>
                </div>
            </form>
        </section>
</body>
</html>