<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Radio 2</title>
</head>
<body>
<form method="post" action="traitement-form-radio2.php">
<p>Méthode de paiement</p>
<input type="radio" name="paiement" value="carte bleue"><label for="carte bleue">Carte bleue</label><br>
<input type="radio" name="paiement" value="espèces"><label for="espèces">Espèce</label><br>
<input type="radio" name="paiement" value="chèque"><label for="chèque">Chèque</label><br>
<input type="submit" value="envoyer">
</form>    
</body>
</html>