<?php
namespace app\controllers;
require_once "/../Models/client.php";
class saveClient1{ 
    public function enregister(){
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $nom=$_POST['nom']?? '';
        $nom = htmlspecialchars($nom);
        $prenom=$_POST['prenom']?? '';
        $prenom = htmlspecialchars($prenom);

        $date=$_POST['date']?? '';
        $date = htmlspecialchars($date);
        $sex=$_POST['sex']?? '';
        $sex = htmlspecialchars($sex);

        if(empty($nom) || empty($prenom) || empty($date) || empty($sex)){

            echo "Erreur: les champs doivent etre obligatoirement remplie";
        }
//envoyer les donnees au model
        $client= new client();
        $client->setNom($nom);
        $client->setPrenom($prenom);
        $client->setSex($sex);
        $client->setAge($Aget);

    }
if ($client->save()) {
                echo "Client enregistré avec succès !";
            } else {
                echo "Erreur lors de l'enregistrement en BD.";
            }

}
}

?>