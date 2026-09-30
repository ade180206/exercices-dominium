<?php
session_start();
if (!isset($_SESSION['nom']) || !isset($_SESSION['prenom'])) {
    header('Location: formulaire.php');
    exit();
} else {
   header('Location: sms.php');
   exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message reçu</title>
</head>
<body>
    <div align="center">
        <h1>felicitations <?php echo htmlspecialchars($_SESSION['nom']) . ' ' . htmlspecialchars($_SESSION['prenom']); ?> ,vous etes connectés!</h1>
        <br>
    </div>
</body>
</html>