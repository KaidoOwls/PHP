<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice boucles</title>
</head>
<body>
    <div class="partie1">
    <?php
       $a = 1; 
       while ($a < 150) { 
           echo $a . "\t"; 
           $a+=2; 
       } 

   ?>
   </div>

   <div class="partie2">
   <?php

        $b = 1;
        while ($b <= 500) {
            echo "Je dois faie des sauvergardes régulières de mes fichiers "." ".$b."<br>";
            // accrémentation +1
            $b++;
        }


?> 
   </div>

   <div class="tableau">
   <table border="2">
        <?php
        // Row pour les lignes. ROW++ accrémentations +1
        for ($row = 0; $row <= 12; $row++) {
            echo '<tr>';
            // Meme choses pour les colonnes 
            for ($col = 0; $col <= 12; $col++) {
                // Lignes * colonnes pour avoir le résultat 
                $result = $row * $col;
                echo '<td>' . $result . '</td>';
            }
            echo '</tr>';
        }
        ?>
    </table>
   </div>

</body>
</html>