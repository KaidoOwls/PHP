<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>PHP</title>
        </head>
        <body>
            <?php 
                echo "Bonjour le monde"; 
                echo 'Bonjour le monde'; 
                $bonjour = "Bonjour le monde"; 
                echo "<b>$bonjour</b>"; 
                print "Seydina test";
             // Si encadrer dans une balise html mettre come sinon juste ajouter /n //
                echo "<p>Bonjour le monde,\ncomment allez-vous ?</p>"; 
            ?> 
     <?php
            $euro=6.566585669;
            printf("%.2f FF<br />",$euro);
            $money1 = 68.45;
            $money2 = 54.75;
            $money = $money1 + $money2;
            // echo $money affichera "123.1";
            echo "affichage sans printf : " . $money . "<br />";
            $monformat = sprintf("%01.2f", $money);

            // echo $monformat affichera "123.10"
            echo "affichage avec printf : " . $monformat . "<br />";

            $year="2002";
            $month="4";
            $day="5";
            $varDate = sprintf("%04d-%02d-%02d", $year, $month, $day) ;

            // echo $varDate affichera "2002-04-05"
            echo "affichage avec sprintf : " . $varDate;
            $myVar = "KO";

            if ($myVar != "OK") 
            {
                error_log("Ouh là pas bien");
                // Message enregistré dans le fichier 'C:/<repertoire_logs>/php_error.log' 
            }
            
            
        ?>  
            <!-- Exemple de variables variables (en préfixant un double $ on l'affecte à la variable $) -->
        <?php
                $var1 = "bonjour";
                $$var1 = "Le monde";
                echo $bonjour;
        ?>
            <!-- Les constantes comme les euros par exemples -->
            <?php 
                define("EURO",6.67);
                echo EURO;
                ?>
                <!-- Les superglobales tjr précéder de $_ -->
                <?php 
                $_GET["Test1"] = "Salut c'est un test on va voir ce que ça fait";
                echo $_GET ["Test1"]; // Affiche 'Afpa' 
                ?>
                <!-- Les variables systèmes  -->
                <?php 
                echo $_SERVER["SERVER_NAME"];
                ?>
        </body>
    </html>