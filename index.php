<?php
require "Personnage.php";
require "Magicien.php";


$perso = new Personnage("Ghlis", "Yanis", 23);
$perso2 = new Personnage("Moulin", "Agathe", 21);

$perso->deplace();

$perso->attack($perso2);

Personnage::test();
?>