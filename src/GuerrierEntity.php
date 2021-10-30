<?php

class GuerrierEntity extends PersonnageEntity {
    public function __construct($prenom, $type){
        $this->setPrenom($prenom); 
        $this->setPv(100);
        $this->setType($type);
        $this->setAttaque(random_int(20, 40));
        $this->setDefense(random_int(10, 19));
    }

    public static function attaque(){
        print("le guerrier attaque"); 
    }

}