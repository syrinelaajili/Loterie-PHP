<?php
const VAL_MIN=1;
const VAL_MAX=49;
//Commencer par générer 1 nombre aléatoire compris entre 1 et 49  (peut-être existe-t-il une fonction en PHP qui répond à ce besoin) 
 $nombre=rand(VAL_MIN,VAL_MAX);


// echo $nombre . '<br>';


// Générer ensuite 6 nombres aléatoires compris entre 1 et 49
// for($i=0;$i<6;$i++)
//         {
//                 $nombre= mt_rand(VAL_MIN,VAL_MAX);
//                 echo $nombre . '<br>';
//         }


//Trouver un moyen d'éviter les doublons on utilise le if (La trace d'un programme)
// $tab = [];
// $n = 0;
 
// while ($n < 6) {
//     $nombre=rand(VAL_MIN,VAL_MAX);
//    if (!in_array($nombre, $tab)) {
//        array_push($tab,$nombre);
//        $n++;
//    }
// }
function loterieTab() {
    $tab=array();
    for ($i=0; $i<6; $i++) {
        do{
            $nombre=rand(VAL_MIN,VAL_MAX);
        }
        while(in_array($nombre,$tab));
        array_push($tab,$nombre);
    }
    //sort on l'utilise pour trier notre tableau en ordre croissant
    sort($tab);
    $chaine= implode(" ", $tab);
    return $chaine;

}
$resultat=loterieTab();
include 'index.phtml';

 

