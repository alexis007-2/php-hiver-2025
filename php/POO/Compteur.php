<?php
class Compteur
{
    public function __construct(private int $val=0)
    {

    }

    /**
     * Un getter qui retourne l' attribut privé $val
     *
     * @return integer
     */
    public function getVal():int
    {
        return $this->val;
    }

    /**
     * Un setter pour modifier la valeur
     *
     * @param integer $v
     * @return void
     */
    public function setVal(int $v):void
    {
        $this->val = $v;
    }

    public function clic():void
    {
        $this->val = $this->val+1;
    }

    public function raz():void
    {
        $this->val = 0;
    }
}