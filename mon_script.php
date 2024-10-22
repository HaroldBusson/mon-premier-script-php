<?php

$monNomdeVariable = "maJolieVariable";
$maJolieVariable = "je suis une jolie varible";
$tableauDeNom = [$monNomdeVariable];
echo "nom: ". ${$tableauDeNom[0]};

$monNomdeVariable = "";
$monNomdeVariable ??= 51;

var_dump($argv);

?>