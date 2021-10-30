<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="./play.php" method="post">
        <label for="name">Nom</label>
        <input type="text" name="name" id="name">
        <select name="perso" id="perso-select">
            <option value="">Choisir un personnage</option>
            <option value="guerrier">Guerrier</option>
            <option value="magicien">Magicien</option>
        </select>
        <input type="submit" value="valider">
    </form>

</body>

</html>