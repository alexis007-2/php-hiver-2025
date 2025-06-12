<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Radio</title>
</head>
<body>
   <h1>Formulaire radio</h1>
   <p>Votre civilité</p>
   <form method="post" action="traitement-radio.php">
   <input type="radio" name="civilite" value="Mr"><label for="Mr">Monsieur</label> 
   <input type="radio" name="civilite" value="Mme"><label for="Mme">Madame</label>
   <input type="radio" name="civilite" value="autre"><label for="autre">Autre</label>
   <p> Votre nationalité</p>
   <input type="radio" name="nat" value="française"><label for="française">Française</label>
   <input type="radio" name="nat" value="étrangère"><label for="étrangère">Etrangère</label>
   <input type="submit" value="envoyer">
    </form>
</body>
</html>