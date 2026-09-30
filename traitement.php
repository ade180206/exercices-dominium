<?php
session_start();

if (isset($_POST['envoyer'])) {

    $nom    = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);

    if (!empty($nom) && !empty($prenom)) {
        $_SESSION['nom']    = $nom;
        $_SESSION['prenom'] = $prenom;
        header('Location: sms.php');
        exit();

     } 

 } else {
    header('Location: form.php');
    exit();
}