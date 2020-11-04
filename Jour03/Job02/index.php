<?php

    $str = array('Tes ','ces ','intants ','seront ','perdus ','dans ','le temps ','comme ','les larmes ','sous ','la pluie.');
    
    foreach ($str as $cle => $valeur) {
        if ($cle%2==0) //si la valeur modulo 2 est egale 0 ca veut dire que le chiffre est paire
            echo "$valeur";
    }
?>