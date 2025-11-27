<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="/saveClient" method="post">
    <label for="nom">nom</label><input type="text" name="nom"><br>
    <label for="prenom">prenom</label><input type="text" name="prenom"><br>
    <label for="date">date de naissance</label><input type="date" name="date"><br>
    <label for="nom">sexe</label><br><input type="radio" name='sex' value="homme">M<br>
    <input type="radio" name='sex' value="femme">F<br>
    <input type="submit" value="envoyer">


    </form>
</body>
</html>