<?php

$jour = "lundi";
switch ($jour) {
    case "lundi":
        echo "Aujourd'hui, c'est le début de la semaine !\n";
        break;
    case "mardi":
        echo "C'est mardi, on est en forme !\n";
        break;
        case "mecredi":
            echo "C'est le milieu de la semaine !\n";
    case "jeudi":
        echo "Déjà jeudi, presque le week-end !\n";
        break;
    case "vendredi":
        echo "C'est vendredi, fin de la semaine de travail !\n";
        break;
    case "samedi":
    case "dimanche":
        echo "C'est le week-end, profite bien !\n";
        break;
    default:
        echo "Jour inconnu.\n";
}

?>