<?php

class PersonnageEntity
{

    private $pv = 100;

    public function __construct($prenom, $type)
    {
        $this->setPrenom($prenom); 
        $this->setPv(100);
        $this->setType($type);

        // $this->Hydrate::hydrate($data);
    }

    public function setId(int $id){
        $this->id = $id;
    }
    
    public function getId(){
        return $this->id; 
    }

    public function setPrenom(string $prenom){
        $this->prenom = $prenom;
    }

    public function getPrenom(){
        return $this->prenom; 
    }

    public function setPv(int $pv){
        $this->pv = $pv;
    }

    public function getPv(){
        return $this->pv; 
    }

    public function setDefense(int $defense){
        $this->defense = $defense;
    }

    public function getDefense(){
        return $this->defense; 
    }

    public function setAttaque(int $attaque){
        $this->attaque = $attaque;
    }

    public function getAttaque(){
        return $this->attaque;
    }

    public function setType(string $type){
        $this->Type = $type;
    }

    public function getType(){
        return $this->Type; 
    }
}

