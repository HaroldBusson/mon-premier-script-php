<?php
$valeur1 = 5;      // entier
$valeur2 = '5';    // chaîne de caractères
$valeur3 = 5.0;    // flottant
$valeur4 = 10;     // entier

// Comparaison avec ==
echo "\n== :\n";
echo ($valeur1 == $valeur2) ? "Vrai\n" : "Faux\n";  // Vrai (égalité)
echo ($valeur1 == $valeur3) ? "Vrai\n" : "Faux\n";  // Vrai (égalité)

// Comparaison avec ===
echo "\n=== :\n";
echo ($valeur1 === $valeur2) ? "Vrai\n" : "Faux\n"; // Faux (non-identique, types différents)
echo ($valeur1 === $valeur3) ? "Vrai\n" : "Faux\n"; // Faux (types différents)

// Comparaison avec != et !==
echo "\n!= et !== :\n";
echo ($valeur1 != $valeur3) ? "Vrai\n" : "Faux\n";  // Faux (ils sont égaux)
echo ($valeur1 !== $valeur3) ? "Vrai\n" : "Faux\n"; // Vrai (non identique, types différents)
?>