<?php
namespace app\Models;
    class product{
        private int $id;
        private string $nom;
        private float $prix;

        public function _constructeur(int $id,string $nom,float $prix){

            $this->id=$id;
            $this->nom=$nom;
            $this->prix=$prix;  
        }

        public function getId():int{

            return $this->id;
        }

        public function getnom():string{

            return $this->nom;
        }

        public function getprix():float{

            return $this->prix;
        }

    }



?>