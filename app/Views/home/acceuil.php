<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../asset/accueil.css">
</head>
<body>
    <script src="../js/accueill.js"></script>

<!--voici l'entete de la page d'accueil-->
    <div class="entete">
        <h2>reservation taxi</h2>
        <div class="boutton">
            <a href="#">Accueil</a>
            <a href="#propos">Par rapport</a>
            <a href="#">Connecter</a>
                <a href="#">Autentifier vous</a>
        </div>
    </div>
    <!--La partie du corps  de la page d'accueil-->
    <div class="corps">
        <div class="miniform">
            <h1>Bienvenu dans votre application de reservation de taxi</h1>
            <form action="post">
                <table>
                    <tr>
                        <td><input type="text" name="disposi" id="" placeholder="Localisation de prise en charge"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="" id="" placeholder="Localisation de depot"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Envoyer votre demande" height=100px></td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="image1">
            <img src="../asset/taxiAc.png">
        </div>
    </div>
<!-- parite de la disposition des cartes -->
<div class="texte1"><h1>A propos de l'application</h1></div>
    <div id="propos">
    <div class="info">
        <div class="card box1">
            <div class="photo">
                <img src="../asset/taxiAc.png" alt="">
            </div>
            <div class="text">tres fiable et securise</div>
        </div>
        <div class="card box2">
            <div class="photo">
                <img src="../asset/taxiAc.png" alt="">
            </div>
            <div class="text">paiement fiable</div>
        </div>
        <div class="card box3">
            <div class="photo">
                <img src="../asset/taxiAc.png" alt="">
            </div>
            <div class="text">paiement fiable</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>