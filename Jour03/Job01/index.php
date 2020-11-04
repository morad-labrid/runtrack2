<?php

    $table = [200, 204, 173, 98, 171, 404, 459];

    foreach ($table as $key => $value) {
        if ($value%2==0) //si la valeur modulo 2 est egale 0 ca veut dire que le chiffre est paire
            echo "$value est paire<br>";
        else
            echo "$value est impaire<br>";
    }

?>