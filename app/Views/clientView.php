<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../controllers/clientConrolle.php" method="post">
    <label for="nom">nom</label><input type="text" name="nom"><br>
    <label for="prenom">prenom</label><input type="text" name="prenom"><br>
    <label for="date">date de naissance</label><input type="text" name="date"><br>
    <label for="nom">sexe</label><input type="checkbox" name='sex'>M<br>
    <input type="checkbox" name=sex>F<br>
    <input type="submit" value="envoyer">


    </form>
</body>
</html>