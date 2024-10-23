<?php

// Accueil
echo "Bienvenue au jeu Pierre, Feuille, Ciseau !\n";
$choix = ['pierre', 'feuille', 'ciseau'];

do {
    // Demander le choix du joueur
    echo "Entrez votre choix (pierre, feuille, ciseau) : ";
    $joueur = trim(fgets(STDIN)); // trim supprime les espaces fgets(récupère le contenu de la console) vérifie les 3 choix possibles

    // Vérifier si le choix du joueur est valide
    if (!in_array($joueur, $choix)) { // c'est la boucle avec !in_array
        echo "Choix invalide. Veuillez réessayer.\n";
        continue; // Recommencer la boucle si le choix est invalide
    }

    // Choix aléatoire de l'ordinateur
    $ordinateur = $choix[array_rand($choix)];
    echo "L'ordinateur a choisi : " . $ordinateur . "\n";

    // Déterminer le gagnant
    if ($joueur === $ordinateur) {
        echo "Égalité !\n";
    } elseif (($joueur === 'pierre' && $ordinateur === 'ciseau') || 
              ($joueur === 'ciseau' && $ordinateur === 'feuille') || 
              ($joueur === 'feuille' && $ordinateur === 'pierre')) {
        echo "Vous gagnez !\n";
    } else {
        echo "L'ordinateur gagne !\n";
    }
    // Demander si l'utilisateur souhaite rejouer
    echo "Voulez-vous jouer à nouveau ? (oui/non) : ";
    $reponse = trim(fgets(STDIN));

} while (strtolower($reponse) == 'oui'); // strolower tout en minuscule

echo "Merci d'avoir joué !\n";
    
}

?>