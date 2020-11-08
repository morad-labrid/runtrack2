<!-- Créez une fonction nommée “leetspeak”. Cette fonction prend en
paramètre une chaîne de caractères nommée “str”. Elle doit retourner la
chaine de caractères “str” convertie en leet speak. Cela signifie qu’elle doit
la modifier de sorte à ce que : les “A” deviennent des “4”, les “B” des “8”,
les “E” des “3”, les “G” des “6”, les “L” des “1”, les “S” des “5” et les “T” des
“7”. Cela est valable que l’on crie ou non (majuscules et minuscules). -->


<?php
    function leetspeak($str)
    {
        for ($i=0; isset($str[$i]) ; $i++) { 
            switch ($str[$i]) {
                case 'A':
                case 'a':
                    $str[$i] = "4";
                    break;

                case 'B':
                case 'b':
                    $str[$i] = "8";
                    break;

                case 'E':
                case 'e':
                    $str[$i] = "3";
                    break;
                    
                case 'G':
                case 'g':
                    $str[$i] = "6";
                    break;

                case 'L':
                case 'l':
                    $str[$i] = "1";
                    break;

                case 'S':
                case 's':
                    $str[$i] = "5";
                    break;
                    
                case 'T':
                case 't':
                    $str[$i] = "7";
                    break;
            }
         
        }
        return $str;
    }
    
    echo leetspeak("Alors samy cava ou koi ");

?>