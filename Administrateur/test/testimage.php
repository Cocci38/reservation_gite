<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "file-upload.php" method="post" enctype="multipart/form-data">
        Envoyer plusieurs fichers : 
        <input type = "file" accept = "image/jpg,image/jpeg,image/gif,image/png" name = "file[]" id = "file" multiple>
        <input type = "submit" name = "submit" value="Envoyer les fichiers">
    </form>
    
</body>
</html>