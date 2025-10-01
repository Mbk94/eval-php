<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <h1>Bienvenue sur le site truffé d'erreurs de Jeremy</h1>
    <?php
    if (!empty($_GET)) { ?>
        <p style="color: red;">Vous n'avez pas réglé la premiere erreur !</p>
    <?php }
    ?>
    <a href="./model/traitement.php?validation=true">Commencer</a>
</body>

</html>