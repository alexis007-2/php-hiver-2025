<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire 1</title>
</head>
<body>
<h1>Formulaire 1</h1> 
<form method="post" action="traitement2.php">
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" placeholder="Votre nom"><br>
    <label for="prenom"> Prénom :</label>
    <input type="text" name="prenom" id="prenom" placeholder="Votre prenom"><br>
    <label for="mail">Mail :</label>
    <input type="email" name="mail" id="mail" placeholder="Votre email"><br>
    <input type="submit" value="envoyer">
</form>   
</body>
</html>