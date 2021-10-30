<?php require("Connexion.php");
require("PersonnageEntity.php"); 
require("GuerrierEntity.php"); 
require("MagicienEntity.php"); 
require("BaseManager.php");
require("PersonnageManager.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play</title>
</head>
<body>
    <?php
    $bdd = PDOFactory::getConnection();
    
    $prenom = $_POST["name"];
    $type = $_POST["perso"]; 

   print( "<p>Hi !" . $prenom . "</p>"); 

    
    if ($type == "guerrier") {
        $Maurice = new GuerrierEntity($prenom, $type);
        // $Maurice->Add();
        $newManager = New PersonnageManager(PDOFactory::getConnection());
        $newManager->addPersonnage($Maurice, $type);
    }
    if ($type == "magicien") {
        $newPerso = new MagicienEntity($prenom, $type);
        // $newPerso->Add();
        $newManager = New PersonnageManager(PDOFactory::getConnection());
        $newManager->addPersonnage($newPerso, $type);

    }

    $test = $bdd->query('SELECT * FROM personnage ORDER BY id DESC limit 1'); 
    $reponse = $bdd->query('SELECT * FROM personnage');
    while($data = $test->fetch()){
        while ($donnees = $reponse->fetch()) {
            echo "<div>" . "<h4>" . $donnees['name'] . " - " . $donnees['type'] . "</h4><br/><a href='./letsplay.php/?current=". $data['id'] . "&adv=". $donnees['id'] ."'>Affronter" . "</a></div>";
        }
    }
    ?>
</body>
</html>

