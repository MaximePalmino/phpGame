<?php

class MagicienEntity extends PersonnageEntity {

    public function __construct($prenom, $type){
        $this->setPrenom($prenom); 
        $this->setPv(100);
        $this->setType($type);
        $this->setAttaque(random_int(5, 10));
        $this->setDefense(0);
    }
    public static function endormir(){
        print("Le magicien endort"); 
    }
}