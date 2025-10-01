<?php
// AUCUNE ERREUR DANS CE FICHIER, Allez voir ailleurs ! 

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['validation']) && $_GET['validation'] != "true") {
        $location = "../index.php?erreur=true";
    } else {
        $location = "../erreur2.php?success=true";
    }
}


if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (isset($_POST['submit_connexion'])) {
        if (!preg_match('/^[\w\.-]+@[\w\.-]+\.[a-z]{2,}$/i', $_POST['email'])) {
            $location = "../erreur2.php?success=true&erreur=true";
        } else {
            $location = "../erreur3.php?success=true";
        }
    } else {
        $location = "../erreur2.php?success=true&erreur=true";
    }
}


header("Location: $location");
exit;
