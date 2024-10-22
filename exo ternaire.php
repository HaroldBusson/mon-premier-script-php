<?php
$montant = 150€;

$remise = ($montant>100€) ? $montant*0.10 : 0; // Montant >100 Est-ce vrai ? Oui remise 10% sinon pas de remise

echo $total= ($montant - $remise);


?>