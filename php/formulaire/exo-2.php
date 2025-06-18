<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 2</title>
</head>
<body>
    <form method="post" action="traitement-exo2.php">
        <label for="nom">Nom</label><input type="text" name="nom" id="nom" placeholder="Votre nom"><br>
         <label for="email">Email</label><input type="email" name="email" id="email" placeholder="Votre email"><br>
          <label for="message">Message</label>
          <textarea name="message" id="message"></textarea>
          <input type="submit" value="envoyer">
    </form>
</body>
</html>
<!--1. Créez un formulaire avec `nom`, `email` et `message`.
2. Vérifiez que tous les champs sont remplis avant d’afficher les données.-->