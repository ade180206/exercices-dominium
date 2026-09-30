<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REDIRECTION D'UN MESSAGE SUR UNE AUTRE PAGE</title>
</head>
<body>
    <marquee bgcolor="skyblue"> <h1>formulaire de connexion </h1></marquee> 
    <br>
    <br>
    <div align="center">
        <form  action="traitement.php" method="POST">
             <Label for="nom">NOM</Label>
             <input type="text" name="nom" id="nom" placeholder="veuillez saisir votre nom"><br><br>
             <label for="prenom">PRENOMS</label>
             <input type="text" name="prenom" id="prenom" placeholder="veuillez saisir votre prenom"><br>
             <br>
             <button type="submit" name="envoyer">Envoyez</button>
      </form>
    </div>
</body>
</html>