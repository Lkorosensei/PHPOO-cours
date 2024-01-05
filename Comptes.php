<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1 Compte</title>
</head>
<body>
    <h1>Compte</h1>
    <?php
class Compte 
{
    private  $numero;
    private  $proprietaire;
    private  $solde;



    function __construct ($numero, $proprietaire, $solde = 0.0)
    {
        $this-> numero = $numero;
        $this-> proprietaire = $proprietaire;
        $this-> solde = $solde;
    }



    function get_numero()
    {
        return $this-> numero = $numero;
    }
    
    function get_solde()
    {
        return $this-> solde = $solde;
    }
    
    function depot($montant)
    {
        $this->solde +=$montant;
    }

    function retrait($montant)
    {
        return $this->solde -= $montant;
    }

    function affiche()
    {
        echo "<br> Compte n°" .$this->numero.", Propriétaire : " .$this->proprietaire. ", Solde = " .$this->solde . ".";
    }
}

    ?>
</body>
</html>