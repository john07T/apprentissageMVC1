<h2>🧺 Panier</h2>

<?php if (empty($cart)) : ?>
    <p>Votre panier est vide.</p>
<?php else : ?>
    <ul>
    <?php foreach ($cart as $id => $item): ?>
        <li>
            <?= $item["name"] ?> – <?= $item["price"] ?> FCFA  
            <a href="?remove=<?= $id ?>">Retirer</a>
        </li>
    <?php endforeach; ?>
    </ul>

    <strong>Total : <?= $total ?> FCFA</strong>
<?php endif; ?>

<br><br>
<a href="index.php">Retour à la boutique</a>
