<?php

function decode($message)  { /* c'est la fonction qui execute les 3 messages*/
    $lenghtMessage = strlen($message); /* calcul la gtaille de la chaine*/
    $halfMessage = $lenghtmessage/2; /* divise en 2 le nombre de caractère */
    $subStringKeyFigure = mb_substr($Message,5,$lenghtMessage); /* récupère la 6e caractère de la sous chaine de la longueur du chiffre-clé */
    $replaceChain = str_ireplace("@#?",'',$subStringKeyFigure); /* str_ireplace remplace ‘@#?’ par un espace */
    $reverseChain = strrev($replaceChain); /* inverse la chaine de caractères */ 

}

$message1="0@sn9sirppa@#?ia’jgtvryko1";
$message2="q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
$message3="aopi?sgnirts@#?sedhtg+p9l!";

?>  