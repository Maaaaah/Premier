<?php
require "Personnage.php";
require "Magicien.php";

$perso = new Personnage("Ghlis", "Yanis", 23);

$perso->deplace();

Personnage::test();
?>