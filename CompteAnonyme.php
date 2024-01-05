<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte Anonyme</title>
</head>
<body>
    <h1>Compte Anonyme</h1>
    <?php

include("Comptes.php");
class CompteAnonyme extends Compte
{

    function __construct($numero, $solde = 0.0)
    {
        parent:: __construct($numero, "anonyme", $solde);
    }


    
    function afficher()
    {
        echo "<br> Compte anonyme n°".$this->get_numero().", Solde = ".$this->get_solde() .".";
    }

}
    ?>
</body>
</html>