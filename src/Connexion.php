<?php

class PDOFactory
{
    public static function getConnection()
    {
        try {
            return new PDO('mysql:host=db;dbname=Game', 'root', 'example');
        } catch (PDOException $e) {
            print "Erreur /!\ : " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
