<?php

include("valeurs.php");
class Action extends Valeurs
{
    public $bourse;


    function __construct($nom,$prix,$bourse="Paris")
    {
        parent:: __construct($nom,$prix);
        $this->bourse=$bourse;
    }


    public function getinfo()
    {
        $info="<h3>Action $this->nom cotée à la bourse $this->bourse </h3>";
        $info.=parent::getinfo();
        return $info;
    }
}
?>