<?php

class PersonnageManager extends BaseManager {

    public function addPersonnage(PersonnageEntity $perso, $type)
    {
        $req = "INSERT INTO personnage (name, pv, attaque, defense, type) VALUES (:name,:pv,:attaque,:defense,:type)";
        $result = $this->bdd->prepare($req);
        $result->bindValue(':name', $perso->getPrenom(), PDO::PARAM_STR);
        $result->bindValue(':pv', $perso->getPv(), PDO::PARAM_INT);
        $result->bindValue(':attaque', $perso->getAttaque(), PDO::PARAM_INT);
        $result->bindValue(':defense', $perso->getDefense(), PDO::PARAM_INT);
        $result->bindValue(':type', $type, PDO::PARAM_STR);
        return $result->execute();
    }
}
