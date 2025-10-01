<?php if (!isset($_GET['success'])) {
        $url = $_SERVER['HTTP_REFERER'] ?? '';
    
        // header("Location: " . ($url ?: "./grossiere_erreur.php"));
        // exit;
    } ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Erreur3</title>
</head>

<body>
    <h1>Felicitations !</h1>
    <p>tu peux maintenant me l'envoyer</p>

    <img src="./assets/img/bravo.webp" alt="bravoooo" id="banniere" style="width: 300px; height: 300px;">
    <script src="./assets/js/structure.js"></script>
</body>

</html>