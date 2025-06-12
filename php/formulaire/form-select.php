<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire select</title>
</head>
<body>
    <h1>Formulaire select</h1>
    <form method="post" action="traitement-select.php">
    <label for="loisir">Votre loisir</label>
    <select name="loisir" id="loisir">
    <option value="cinema">Cinema</option>
    <option value="lecture">Lecture</option>
    <option value="sport">Sport</option>
     </select>
     <input type="submit" value="envoyer">
</form>

   
</body>
</html>