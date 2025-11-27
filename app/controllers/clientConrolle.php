<?php
namespace app\controllers;
require_once "app/Models/client.php";
public class saveClient1{ 
    public function enregister(){
    if($_SERVER['REQUEST_METHODE']=='POST'){
        $nom=$_POST['nom']?? '';
        $nom = htmlspecialchars($nom);
        $prenom=$_POST['prenom']?? '';
        $prenom = htmlspecialchars($prenom);

        $date=$_POST['date']?? '';
        $date = htmlspecialchars($date);
        $sex=$_POST['sex']?? '';
        $sex = htmlspecialchars($sex);

        if(empty($nom) & empty($prenom) & empty($date) & empty($sex)){

            echo "Erreur: les champs doivent etre obligatoirement remplie";
        }
//envoyer les donnees au model
        $client= new client();
        $client->getNom();
        $client->getPrenom();
        $client->getSex();
        $client->getAge();

    }


}
}

?>