<?php

$panier = [
    array ( "T-shirt rouge" , '15.50', '5'),
    array ( "T-shirt vert" , '15.50', '6'),
    array ( "T-shirt argent" , '15.50', '8'),
    array ( "Short bleu" , '16.50', '5'),
    array ( "Short vert" , '19.99', '5'),
    array ( "Veste argent" , '19.99', '10'),
    array ( "Veste argent" , '35', '3'),
];

function afficher_panier ($panier) {
    foreach ($panier as $a) {
       echo "<ul>";
    foreach ($a as $b)  
       echo ("<li>  $b  </li>");
       echo ("</ul>");
}
}

afficher_panier ($panier);

function calculer_total_panier ($panier) {
    $total = 0;

    foreach ($panier as $a) {
    $total += ($a [1] * $a [2] );
    }
echo "<p> Le total du panier est de  : ". $total ." euros </p>";
}

calculer_total_panier ($panier);

?>
