<?php
class Etudiant
{
    public function __construct(private string $nom,private array $notes)
    {

    }

    public function moyenne():float
    {
        $s = 0;
        for($i = 0;$i<count($this->notes);$i++){
            $s = $s+$this->notes[$i];
        }
        $m = $s/count($this->notes);
        return $m;
    }

    public function recu():bool
    {
        if($this->moyenne()>=10){
            return true;
        }else{
            return false;
        }
    }
    public function affiche():void
    {
        echo $this->nom;
        echo '<br>';
        foreach($this->notes as $n){
            echo $n;
            echo '<br>';
        }
    }
}