<?php $weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.

// TODO


switch($opponentWeapon) { // each weapon are tested
    case "fist":
        $stevensonWeapon = "fist";
        echo "le poing bat le fouet mais perd contre le pistolet";
        break;
    case "whip":
        $stevensonWeapon = "whip";
        echo "le fouet bat le pistolet mais perd contre le poing";
        break;
    case "gun":
        $stevensonWeapon = "gun";
        echo "le pistolet bat le poing mais perd contre le fouet";
        break;
}

echo "You should choose this : $stevensonWeapon ."; // show the recommended weapon
?>