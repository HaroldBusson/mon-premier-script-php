<?php
$nomVariables=['nom', 'age', 'ville'];
$valeurs = ['Alice', 25, 'Paris']
// Boucles pour creer des variables dynamiques
for ($i = 0; $i<3; $i++) { 
    // Création d'une variable dynamique avec un nom tiré du tableau 
${$nomsVariables[$i]} = $valeurs[$i]; // $nom = alice // {} pour que la machine comprend $nomsVariables[$i] sinin il aurait compris $nomsVariables
}
echo"Nom : ". $nom . "\n";
echo "age : ". $age . "\n";
echo "Ville ". $ville . "\n";

?>