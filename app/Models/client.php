<?php
namespace app\Models;

class client{

    private string $nom;
    private string $prenom;
    private string $age;
    private string $sex;
    private string $dateNaissance;

    public function __construct($nom,$prenom,$age,$sex,$dateNaissance){
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->age=$age;
        $this->sex=$sex;
        $this->dateNaissance=$dateNaissance;


    }
    /*obtentiob des differents donnees */
    public  function getNom():string{
        return $this->nom=$nom;
        echo $nom;
    }
    public function getPrenom():string{
        return $this->prenom=$prenom;
    }
    public function getAge():int{
        return $this->age=$age;
    }
    public function getsex():string{
        return $this->sex=$sex;
    }
    public function getDate():string{
        return $this->dateNaissance=$dateNaissance;
    }

}


?>