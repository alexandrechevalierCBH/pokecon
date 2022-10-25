<?php

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.class.php';
});

$bob = new Dresseur('Bob', [
    new Pokecon('Pikachié', 6, 'nul'),
    new Pokecon('Carapute', 5, 'douteux'),
    new Pokecon('Zobbizarre', 5, 'mou'),
    new Pokecon('Saltimbank', 5, 'louche'),
]);
$bulbizarre = new Pokecon('Bulbizarre', 5, 'plante');
$carapuce = new Pokecon('Carapuce', 5, 'eau');
$salameche = new Pokecon('Salameche', 5, 'feu');

echo $bob;
