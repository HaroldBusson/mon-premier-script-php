<?php

$personnes = [
    ["nom" => "Alice", "âge" => 30, "ville" => "Paris"],
    ["nom" => "Bob", "âge" => 25, "ville" => "Lyon"],
    ["nom" => "Charlie", "âge" => 35, "ville" => "Marseille"],
    ["nom" => "Diana", "âge" => 28, "ville" => "Bordeaux"],
    ["nom" => "Zinedine", "âge" => 450, "ville" => "Castellane"]

];

foreach ($personnes as $personne) {
    if ($personne["âge"] > 40) {
        break; // Arrêtez l'itération si l'âge est supérieur à 40
    }
    
    if ($personne["âge"]  30) {
        continue; // Passez à la prochaine personne si l'âge est inférieur à 30
    }
    
    echo "Nom: " . $personne["nom"] . ", Âge: " . $personne["âge"] . ", Ville: " . $personne["ville"] . "\n";
}
    
?>