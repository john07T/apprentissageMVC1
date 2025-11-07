<?php 
namespace app\controllers;
use app\Models\jouet;


class jouetController{
    public function index(){
        $jouets=jouet::getAll();
        require __DIR__ . '/../Views/afficher.php';
    }

}

?>