
<!-- Créez un formulaire qui contient un input nommé “str” de type text, une liste
déroulante (select) nommée “fonction” et un bouton submit. Lorsque vous
validez le formulaire, vous devez appliquer des transformations à “str” en
fonction de l’option choisie dans la liste déroulante. Les choix possibles
sont :
- “gras” : une fonction qui prend en paramètre “str”. Elle écrit “str” en
mettant en gras (<b>) les mots commençant par une lettre majuscule.
- “cesar” : une fonction qui prend en paramètre “str” et un nombre
“decalage” (qui vaut 2 par défaut). La chaine est affichée en décalant
chaque caractère d’un nombre égal à “decalage”.
ex : si decalage vaut 1, e devient f. Si décalage vaut 3, z devient c.
- “plateforme”, une fonction qui prend en paramètre “str”. Elle écrit “str”
en ajoutant un “_” aux mots finissant par “me”. -->



<!DOCTYPE html>
<html>
<head>
	<title>Title</title>
</head>
<body>

<form  action="index.php" method="get">

             <label>Str : </label>
             <input type="text" name="str" required/>

             <label>Decalage : </label>
             <input type="number" name="decalage" />

             <label>Fonction : </label>
             <select name="fonction" for="fonction" required>
                <option value="gras">Gras</option>
                <option value="cesar">Cesar</option>
                <option value="Plateforme_">Plateforme_</option>
             </select>

             <input  type="submit" value="OK">
</form>

<?php

function gras($str)
{
    $i = 0;
    $maj = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
    $sizemaj = sizeof($maj);

    while (isset($str[$i]) == true) {
        for ($v = 0; $v < $sizemaj; $v++) {
            if (($str[$i] == $maj[$v] && $str[$i - 1] == " ") || ($str[$i] == $maj[$v] && $i == 0)) {
                while ($str[$i] != " " && isset($str[$i + 1]) == true) {
                    echo "<b>" . $str[$i] . "</b>";
                    $i++;
                }
            }

        }
        echo $str[$i];
        $i++;
    }
}

function Plateforme_($str)
{
    $i = 0;
    while (isset($str[$i]) == true) {

        if (($str[$i] == "m" && $str[$i + 1] == "e") && isset($str[$i + 2]) == false) {
            $str[$i + 2] = "_";
            echo $str[$i];
            $i++;
            
        } elseif (($str[$i] == "m" && $str[$i + 1] == "e") && $str[$i + 2] == " ") {
            $str[$i + 2] = "_";
            echo $str[$i];
            $i++;
        } else {
            echo $str[$i];
            $i++;
        }

    }
}

if ($_GET == true) {
    $str = $_GET["str"];
    $decalage = $_GET["decalage"];
    if ($_GET["fonction"] == "gras") {
        gras($str);

    }
    if ($_GET["fonction"] == "Plateforme_") {
        Plateforme_($str);
    }
}
?>

</body>
</html>


