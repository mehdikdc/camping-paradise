<?php

// Home
include '../config.php';

require '../modele/annonces.php';


// Traitement


include '../view/home.php';

$i = 0;


do {
    
foreach ($annonces as &$value) {
    $value = $value * 2;

} while ($i > 0);




}




?>

