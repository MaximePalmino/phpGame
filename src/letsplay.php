<?php require("Connexion.php");
require("PersonnageEntity.php"); 
require("GuerrierEntity.php"); 
require("MagicienEntity.php"); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game</title>
</head>

<body>
    <div style="margin: auto; padding: 5% 15%;">
    <h2 style="text-align: center;"> /!\ Que le combat commence /!\ </h2>
    <?php
    $bdd = PDOFactory::getConnection();
    $reponse = $bdd->query('SELECT * FROM personnage');

    $current = $_GET["current"];
    $adv = $_GET["adv"];


    $perso1 = $bdd->query('SELECT * FROM personnage WHERE id =' . $current);
    $perso2 = $bdd->query('SELECT * FROM personnage WHERE id =' . $adv);
    while ($data = $perso2->fetch()) {
        while ($donnees = $perso1->fetch()) {
            echo "<div style='padding: 15px;'>" . "<p style='color:red; text-align: right;'> Vous : " . $donnees['name'] . " - " . $donnees['pv'] . " pv</p></div>";
            echo "<div style='background-color:lightgray; display: flex; justify-content: space-between; align-items: baseline;  padding: 15px; '>" . "<p>" . $data['name'] . " - " . $data['pv'] . " pv</p><form method='post'>
            <button type='submit' name='". $donnees['type'] ."-attack' value='attack'>Attaquer</button></form></div>"; 
        }
    }

    if($_POST["guerrier-attack"]){
        GuerrierEntity::attaque(); 
    }
    if($_POST["magicien-attack"]){
        MagicienEntity::endormir(); 
    }
    ?>
    </div>
</body>

</html> 