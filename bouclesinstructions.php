<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boucles</title>
</head>
<body>
    <!-- Les instructions -->
    <?php 
     $age = 22; 

     if ($age>=18)
     {
        $reponse="majeur" ;
     }
     else
     {
        $reponse=" mineur " ;
     }
     
 
     echo "Vous êtes $reponse ."; 
    ?>
    <!-- on aurait pu le condenser comme ça aussi :     $age = 25; echo "Vous êtes ". ($age >= 18) ? "majeur" : "mineur" . ".";   -->
    <!-- Boucles while  -->
    <?php 
    $a = -5; 
    while ($a < 100) { 
        echo $a; 
        $a++; 
    } 
    ?>
    <!-- Boucles do while  -->
    <?php 
    $a = 4; 
do { 
        if ($a < 5) 
        { 
            echo "a inférieur à 5"; 
            break; 
        } 
        if ($a > 5 ) 
        { 
            echo "a supérieur à 5";
            break;
         }
    } while (1); 
?>
   
</body>
</html>