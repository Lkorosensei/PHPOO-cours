<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Visiteur</title>
</head>
<body>
    <h1>Classe Visiteurs</h1>    
    <?php
class Visiteur // déclaration de la classe
{
    private $nom; // déclaration des attributs
    private $motdepasse ;
    public $derniereVisite ;
    private static $cpt=0;
    

    
    function __construct ($nom, $motdepasse) // constructeur Visiteur(…)
    {   $this-> nom = $nom;
        $this-> motdepasse = $motdepasse;
        $this-> derniereVisite = time();
        Visiteur::$cpt++;
    }


    // récupère l'heure de la dernière visite
    function get_derniereVisite()
    {
        return (date("M d Y", $this->derniereVisite));
    }

    // modifier le nom du visiteur
    function get_nom()
    {
        return $this->nom;
    }

    function set_nom($nom)
    {
        $this->nom = $nom;
    }

    function get_mdp()
    {
        return $this->motdepasse;
    }

    static function  get_cpt()
    {
        return self::$cpt;
    }
}

$visiteur1 = new Visiteur("IBRAHIM","MDP");
echo "Le nom du visiteur1 est : ".$visiteur1->get_nom();
echo PHP_EOL;
$visiteur1->set_nom("SAMIR");
echo"Le nom du visiteur1 est : ".$visiteur1->get_nom();


$visiteur2 = new Visiteur("VICTOR","A7");
echo "<br> Le nom du visiteur2 est : ".$visiteur2->get_nom();
echo PHP_EOL;
echo "La dernière visite date de : ".$visiteur2->get_derniereVisite();


$visiteur3 = new Visiteur("NOE", "OKAY");
echo "<br> Le nom du visiteur3 est : ".$visiteur3->get_nom();
echo PHP_EOL;
echo "Le mot de passe est : ".$visiteur3->get_mdp();
echo PHP_EOL;
echo "Le nombre de visiteur est de : ".$visiteur3->get_cpt();
    ?>
</body>
</html>