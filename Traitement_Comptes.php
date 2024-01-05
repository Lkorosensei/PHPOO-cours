<?php
include("comptes.php");
$compte1 = new Compte(1234, "M. Durand", 565);
$compte1->affiche();
$compte1->depot(2500);
$compte1->affiche();
$compte1->retrait(1600);
$compte1->affiche();

?>