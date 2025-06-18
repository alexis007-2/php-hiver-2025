<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Checkbox2 </title>
</head>
<body>
 <h1>Form checkbox 2</h1>
 <form method="post" action="traitement-form-checkbox2.php">
    <p>Vos films préférés</p>
    <input type="checkbox" name="film[]" value="Terminator"><label for="Terminator">Terminator</label>
    <input type="checkbox" name="film[]" value="Titanic"><label for="Titanic">Titanic</label>
    <input type="checkbox" name="film[]" value="Commando"><label for="Commando">Commando</label>
    <input type="submit" value="envoyer">
 </form>  
</body>
</html>