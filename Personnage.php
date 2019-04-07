<?php 
class Personnage 
{
    private $nom = "Ghlis";
    private $prenom = "Yanis";
    private $age = 23;

    public function __construct($nom, $prenom, $age)
    {
        echo "Initialization of constructor";
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }
    public function deplace() 
    {
        echo "Le personnage $this->prenom est en train de ce deplacer";
    }

    public function age() {
        return $this->age;
    }
}

?>
