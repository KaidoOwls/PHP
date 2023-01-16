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
    
</body>
</html>