<?php
    namespace app\controllers;
    use app\core\route;
/*enregistrement des different donnees des clients*/
    $nomClient=htmlspecialchars($_POST['nom']);
    echo $nomClient;
    $prenomClient=htmlspecialchars($_POST['prenom']);
    $sexClient=htmlspecialchars($_POST['sexe']);
    $ageClient=htmlspecialchars($_POST['age']);
    $dateclient=htmlspecialchars($_POST['date']);
/**/


    $client1=new client;
    $client1->getNom();
    $client1->getPrenom();
    $client1->getAge();
    $client1->getDAte();
    $client1->getSex();

 include __DIR__ .'../Views/clientView.php';
?>