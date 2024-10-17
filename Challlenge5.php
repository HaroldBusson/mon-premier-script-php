<?php $weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.

// TODO

$stevensonWeapon = 'true';
switch $stevensonWeapon {
    case 0:
        echo "le poing bat le fouet mais perd contre le pistolet";
        break;
    case 1:
        echo "le fouet bat le pistolet mais perd contre le poing";
        break;
    case 2:
        echo "le pistolet bat le poing mais perd contre le fouet";
        break;

}

?>