<?php

    $i = 0;
    $logo = "La Plateforme_";

    while( $i <= 100 ) {

            switch ($i) {
                case '42': //si le numero est egale 42  affiche La Plateforme_
                    echo "La Plateforme_<br>";
                    break;
                
                default: // affichage par defaut
                    if($i <= 20) // si inferieur a 20 
                        echo "<i>$i</i><br>"; // souligner affiche les chiffre
                    elseif ($i >= 25 && $i <= 50) { // sinon si entre 25 et 50 efficher en gras
                        echo "<u>$i</u><br>";
                    }
                    else // sinon affichage normal
                        echo "$i<br>";
                        break;
            }
            $i++;
        }

?>