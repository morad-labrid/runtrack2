<!-- Créez une fonction nommée “occurrences”. Cette fonction prend en
paramètre une chaîne de caractères nommée “str” et un caractère nommé
“char”. Elle doit retourner le nombre d'occurrences du caractère “char” dans
“str”. -->

<?php
    
    function occurrences($str, $char){
        
        for ($i=0; isset($str[$i]); $i++) { 
            if ($str[$i] == $char) {
                $x++;
            }
        
        }
        return $x;
    }
    
    $string = "bonjour les amis, je vous aime";
    $charactere = "e";
    $resultat = occurrences($string, $charactere);
    echo "$string<br>";
    echo $resultat;

?>