<?php
if (!isset($_GET['success'])) {
    $url = $_SERVER['HTTP_REFERER'] ?? '';

    
    header("Location: " . ($url ?: "grossiere_erreur.php"));
    
} ?>
    
    <!DOCTYPE html>
    <html lang="en">
        
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>erreur2</title>
</head>


<body>
    <?php if (isset($_GET['success']) && $_GET['success'] == "true") { ?>
        <p style="color: green"> Félicitations ! vous avez trouvé la premiere erreur, on continue ? </p>
    <?php } ?>
    
    <h1>Formulaire de la mort qui tue</h1>
    <p>Pour passer cette épreuve, ce formulaire doit être de type POST et envoyé vers traitement.php</p>
    <p style="color: red"><?= strtoupper("cependant !!!"); ?> <span style="color: white;">d'autres erreurs s'y sont
            glissées.</span></p>
            
    <!-- erreurs à partir d'ici -->
    <form action="./model/traitement.php" method="POST">
    <label for="email">Votre email</label>
    <input type="email" id="email" name="email" required >
    <label for="password">Votre mot de passe</label>
    <input type="password" id="password" name="password" required >
    <input  type="submit" name="submit_connexion">
    </form>
    
    
    </body>

</html>