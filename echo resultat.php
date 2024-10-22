<?php

$a = 7;
$b = 6;
$c = 3;

$resultat1 = $a > 8;                 
$resultat2 = $b > 9;                 
$resultat3 = !($b == 6);             
$resultat4 = ($a > 6) && ($c > 8);   
$resultat5 = ($a > 6) && ($c < 8);   
$resultat6 = ($a  6) || ($c < 8);    
$resultat7 = ($a > 6) || ($c < 10);   
$resultat8 = ($b == 5) || (($c > 10) && ($a  8));

echo "a > 8 : " . ($resultat1 ? 'true' : 'false') . " // Votre réponse: 'true' ou 'false'\n";
echo "b > 9 : " . ($resultat2 ? 'true' : 'false') . " // Votre réponse: 'true' ou 'false'\n";
echo "non (b == 6) : " . ($resultat3 ? 'true' : 'false') . " // Votre réponse: 'true' ou 'false'\n";
echo "(a  6) et (c  8) : " . ($resultat4 ? 'true' : 'false') . " // Votre réponse: 'true' ou 'false'\n";
echo "(a > 6) et (c  8) : " . ($resultat5 ? 'true' : 'false') . " // Votre réponse: 'true' ou 'false'\n";
echo "(a  6) ou (c  8) : " . ($resultat6 ? 'true' : 'false') . " // Votre réponse: 'true' ou 'false'\n";
echo "(a > 6) ou (c  10) : " . ($resultat7 ? 'true' : 'false') . " // Votre réponse: 'true' ou 'false'\n";
echo "(b == 5) ou ((c > 10) et (a  8)) : " . ($resultat8 ? 'true' : 'false') . " // Votre réponse: 'true' ou 'false'\n";

?>