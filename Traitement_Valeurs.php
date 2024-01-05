<h1> Liste des Valeurs </h1>

<?php 

include("Valeurs.php");
$valeur1 = new Valeurs("BMP", 159, 50);
echo $valeur1->getinfo();

?>