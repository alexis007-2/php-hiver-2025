<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Checkbox</title>
</head>
<body>
 <h1>Formulaire Checkbox</h1>
 <form method="post" action="traitement-checkbox.php">
<p> Equipe de Football</p>
<input type="checkbox" name="foot[]" value="OM"><label for="OM">OM</label><br>
<input type="checkbox" name="foot[]" value="PSG"><label for="PSG">PSG</label><br>
<input type="checkbox" name="foot[]" value="FC Nantes"><label for="FC Nantes">FC Nantes</label>
<input type="checkbox" name="foot[]" value="Paris FC"><label for="Paris FC">Paris FC</label>
<p> Fast Food</p>
<input type="checkbox" name="food[]" value="Burger King"><label for="Burger King">Burger King</label>
<input type="checkbox" name="food[]" value="Flunch"><label for="Flunch">Flunch</label>
<input type="checkbox" name="food[]" value= "Five Guy"><label for="Five Guy">Five Guy</label>
<input type="submit" value="envoyer">
 </form>   
</body>
</html>