<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>affichage de jouet</title>
</head>
<body>
    <h1>Liste des jouets</h1>
    <ul>
        <?php foreach($jouets as $jouet)?>
        <li><?=htmlspecialchars($jouet['nom'])?>-<?=htmlspecialchars($jouet['prix'])?></li>
    </ul>
</body>
</html>