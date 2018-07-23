<?php

//Exercice 1
$age = 31;
if ($age>=18){
    echo "Vous êtes majeur";
} else {
    echo "Vous êtes mineur";
};
echo "<br><br>";

//Exercice 2
$isEasy = true;
if (! $isEasy){
    echo "c'est difficile !!!";
} else {
    echo "C'est facile !!";
};
echo "<br><br>";

echo $isEasy ? "C'est facile !!" : "C'est Difficile !!!";
echo "<br><br>";

//Exercice 3

$age = 31;
$gender = "Homme"; // ecrire Homme ou Femme

if ($age>=18){
    echo "Vous êtes majeur et un.e ".$gender;
} else {
    echo "Vous êtes mineur et un.e ".$gender;
};
echo "<br><br>";

echo $age>=18? "Vous êtes majeur et un.e ".$gender : "Vous êtes mineur et un.e ".$gender;

echo "<br>";

$gender = "Femme";
echo $age>=18? "Vous êtes majeur et un.e ".$gender : "Vous êtes mineur et un.e ".$gender;

echo "<br><br>";

//Exercice 4

$magnitude = rand (1,9);

switch ($magnitude){ 
    case 1:
     echo "Micro-séisme impossible à ressentir.";
    break;  

    case 2: 
    echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.";
    break;

    case 3: 
    echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
    break;   

    case 4: 
    echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
    break;    

    case 5:
     echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.";
    break;    

    case 6:
     echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.";
    break;    

    case 7: 
    echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.";
    break;    

    case 8:
     echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
    break;   

    case 9:
     echo "Excellent travail, c'est parfait !";
    break;   

    default: echo "Séisme capable de tout détruire sur une très vaste zone.";

};
echo "<br><br>";

//Exercie 5

 // echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';

if ($gender != "Homme"){
    echo "C'est une développeuse !!!";
} else {
    echo "C'est une développeur";
};

echo "<br><br>";

//Exercice 6

//echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
if ($age >= 18){
    echo "Tu es majeur";
} else {
    echo "Tu n'est pas majeur";
};
echo "<br><br>";

//Exercice 7
//echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
$isOk = true;

if ($isOk == false){
    echo "c'est pas bon !!!";
} else {
    echo "c'est ok";
};
echo "<br><br>";

//Exercice 8
//echo ($isOk) ? 'c'est ok !!' : 'c'est pas bon !!!';

if ($isOk){
    echo "c'est ok";
} else {
    echo "c'est pas bon !!!";
};
echo "<br><br>";