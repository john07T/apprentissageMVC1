<?php
namespace app\Models;
require_once "/controllers/connectBD.php";
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
    /*obtention des differents donnees */
    public function setNom(string $nom): void {
    $this->nom = $nom;
}

public function setPrenom(string $prenom): void {
    $this->prenom = $prenom;
}

public function setAge(int $age): void {
    $this->age = $age;
}

public function setSex(string $sex): void {
    $this->sex = $sex;
}

public function setDate(string $dateNaissance): void {
    $this->dateNaissance = $dateNaissance;
}
 

public function save(){
    global $pdo;// j'utilise la connexion defini dans les connectBD.php
//**********  la j'associe chaque parametre de la requete a la valeur requette*********//
//**autrement dis j'associe :nom a sa variable et le rend moins sensible auc attaques SQL**//
    $save= $pdo->prepare("insert into clients (nom,prenom,dare,age) values (:nom,:prenom,:age,:sex)");
    $save->bindParam(':nom',$this->nom);
    $save->bindParam(':prenom',$this->prenom);
    $save->bindParam(':age',$this->age);
    $save->bindParam(':date',$this->date);

      $save->execute();    
}
}
?>