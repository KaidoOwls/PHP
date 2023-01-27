<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableaux</title>
</head>
<body>
<div class="ex1">
<?php
$tableau[0] = "Pomme"; 
$tableau[1] = "Poire"; 
$tableau[2] = "Banane"; 

$tableau = array(); 
$tableau[] = "Pomme"; 
$tableau[] = "Poire"; 
$tableau[] = "Banane";
?>

</div>
<div class="ex2">
<!-- Tableaux plusieurs dimensions -->
<?php
$tab1[] = array(1, "janvier", "2016"); 
$tab1[] = array(2, "février", "2017"); 
$tab1[] = array(3, "mars", "2018"); 
$tab1[] = array(4, "avril", "2019");

echo $tab1[2][0]." ".$tab1[2][1]." ".$tab1[2][2]."<br>";
?>
</div>
<div class="ex3">
<!-- Tableaux associatifs -->
<?php
$facture = array(
    "Janvier" => 500, 
    "Février" => 620, 
    "Mars" => 300, 
    "Avril" => 130, 
    "Mai" => 560, 
    "Juin" => 350
    ); 
 
 $facture_sixmois = 0; 
 
 foreach ($facture as $mois => $montant) 
 { 
    echo "Facture du mois de $mois : $montant Euros<br>"; 
    $facture_sixmois += $valeur; 
 } 
 
 echo "Facture total de six mois : <b>$facture_sixmois Euros</b>"; 

?>
</div>


</body>
</html>