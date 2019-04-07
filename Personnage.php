<?php 
class Personnage 
{
    private $nom = "Ghlis";
    private $prenom = "Yanis";
    private $age = 23;

    private static $boya = "je suis un boya";

    public function __construct($nom, $prenom, $age)
    {
        echo "Initialization of constructor <br />";
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }
    public function deplace() 
    {
        echo "Le personnage " . $this->prenom . " est en train de ce deplacer <br />";
    }

    public function age() {
        return $this->age;
    }

    public static function test() {
        return self::$boya;
    }

    public function attack(Personnage $perso)
    {
        echo "" . $this->prenom . " attaque le personnage " . $perso->prenom . "<br />";
    }
}

?>
