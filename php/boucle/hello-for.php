<?php
echo 'debut de la boucle for <br>';
/* for en 3 parties

1) Initialisation ou valeur qu' on donne au départ
2) Condition de fin ou arret de la boucle quand la condition est fausse
3) Incrémentation ou décrementation ($i = $i-1)
*/

for($i=0;$i<5;$i=$i+1){
    echo 'hello '.$i.'<hr>';
}
echo 'fin de la boucle';