<?php
 namespace app\core\router;
    use app\models\client;
    use app\models\admin;
    if(!isset($_POST[nom])){ 
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
    $client1->getNom();
    $client1->getPrenom();
    $client1->getAge();
    $client1->getDAte();
    $client1->getSex();
    //redirige les donnees dans la pages indiques
    header(Location :app/Models/client.php);
    exit;



?>