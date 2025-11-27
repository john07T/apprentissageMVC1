<?php
 namespace app\router\router;
    use app\models\client;
    use app\models\admin;
    if(isset($_POST['nom'])){ 
    /*enregistrement des different donnees des clients*/
        $nomClient=htmlspecialchars($_POST['nom']);
         echo $nomClient;
        $prenomClient=htmlspecialchars($_POST['prenom']);
        $sexClient=htmlspecialchars($_POST['sexe']);
        $ageClient=htmlspecialchars($_POST['age']);
        $dateclient=htmlspecialchars($_POST['date']);
    }
/**/

    $client1=new client;
    $client1->setNom();
    $client1->setPrenom();
    $client1->setAge();
    $client1->setDAte();
    $client1->setSex();
    //redirige les donnees dans la pages indiques
    include __DIR__ .'/../controllers/clientControlle.php';
    header("Location :app/Models/clientControlelle.php"); 

    exit;



?>