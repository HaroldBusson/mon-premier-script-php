<?php
function somme(int $num1, int $num2): int|string
{
    if (is_int($num1) || !is_int($num2)) {  // si le parametre n'est pas un entier

    }
    return $num1 + $num2;
}
echo somme($num1, $num2);

/* Create a function montant
function montant(float ($budget),float($total)): bool /* le type (bool) de ce qu'on renvoit */
{
    if ($budget >= $total) {
        return true;
    }
        return false;
    }
 /* Autre exo */

function somme(int $num1, int $num2): int|string
{
    if (is_int($num1) || !is_int($num2)) {  // si le parametre n'est pas un entier

    }
    return $num1 + $num2;
}
echo somme($num1, $num2);

/* autre exo */

$budget = 100;
$total = 200;
if (montant($budget, $total)) {
    echo " Budget repecté la commande est passée";
}else{
    echo "Budget pas respecté la commande non effectuée";
}

/* créer une fonction qui prend une variable $start et une variable $end et qui affiche :
C’est la ligne {numéro}
en remplaçant {numéro} par l’entier en partant de $start jusqu’à $end */

function line(int $start, int $end): void /* void type ça renvoit rien */
{
    for ($i = $start; $i <= $end; $i++) { 
       echo  "line: $i\n"; 
    }
            
}

line(5,10);

/* multiplie par 5 */

function multiple(int $num): void 
{
    for ($i = $start; $i <= 10; $i++) { 
       echo  "$i*$num='' . si $i * $num . " <br/>; /* une simple quote ne prends pas en compte les variables */
    }
            
}
 /* former un triangle (5) 
 1
 22
 333
 4444
 55555
 */

function triangle(int $a): void
{
    for($line=1; $line<=$a; $line++) { // parcourir les lignes
        for($column= 1; $column<=$line; $column++)  // parcourir les colonnes
    }

    echo $line . "";
}

echo <br/>;

/* Afficher un prénompar ligne */
$apprenants = [
    0 => ‘david’,
    1 => ‘fady’,
    2 => ‘paul’,
    3 => ‘pierre’
];
foreach ($apprenants as $apprenant){
    echo $values  "\n" ;
}

/* 7 - créer une fonction qui prend un entier et qui renvoie true si c’est pair, false si c’est impair */

function isPair(float $num) : bool
{
    if ($num%2 == 0){
        return true ;
    }
    return false ;
} 

ou 
function isPair(float $num) : string
{
    return $a % 2 ? : "is pair" or "not pair"
}

/* Exxercie 8*/
$nummbers = [2,5,4,7,9];

foreach($numbers as $values)
{
    if (isPair($values)) {  // La focntion isPair vérifie chaque valeurs est pair 
        echo $numbers . " " "\n";
    }
  
}

function nbrePremier(int $number) : bool
 {
    if ($number <= 1){  // si le nbre est < 1
        return false;
    }
    if ($number === 2){ // exception pour le 2
        return true;
    }

    for($i = 2; $i< $number; $i++){
        if ($number % $i=== 0) {
            return false;
        }
    }
    return true;
}
echo nbrePremier() ? Oui : "Non";

/* Suite Fibonacci*/
function fibonacci(int $n)
{
    if ($n === 0) return 0; // si le chiffre est égal à 0 alors egale 0

 if ($n === 1) return 1; // si le chiffre est égal à 1 alors egale 1

    return fibonacci($n - 1) + fibonacci($n - 2); // à partir de 2 c'est le calcul de cette ligne
}

for ($i = 0; $i <=10; $i++){
    echo "U(".$i.") = " . fibonacci($i) . "<br/>";
}
echo multiple();

function mult(int $a, int $b): int
{
    if ($a === 0 || $b === 0 ) return 0;

    return $a mult($a, $b -1);
}
echo mult(5,4);

/* Puissance */

function puissance(int $a, int $b): int
{
    if ($b === 0) return 1; // condition  d'arret
    if ($b === 1 ) return $a;

    return $a * puissance($a,$b - 1); 
}

?>