<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Texte</title>
</head>
<body>
 <h1>Formulaire texte</h1>
<form method="post" action="traitement-form-text.php">
<label for="ville">Ville :</label>
<input type="text" name="ville" id="ville" placeholder="Entrez votre ville">
<hr>
<label for="description">Description</label>
<textarea name="description" id="description" placeholder="Décrivez la ville"></textarea>
<hr>
<input type="submit" value="envoyer">
</form>
</body>
</html>