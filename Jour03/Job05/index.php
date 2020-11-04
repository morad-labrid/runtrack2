<?php
$str = "On n est pas le meilleur quand on le croit mais quand on le sait.";
$dic = ["voyelles" => "aeiouy", "consonnes" => "bcdfghjklmnpqrstvwxz"];
$i = 0;
$voyelles = 0;
$consonnes = 0;

    while (isset($str[$i])) {
        for ($j=0; isset($dic["voyelles"][$j]);$j++ ) { 
            if ($str[$i] == $dic["voyelles"][$j]) {
                $voyelles = $voyelles + 1 ;
            }
        }
        for ($k=0; isset($dic["consonnes"][$k]);$k++ ) { 
            if ($str[$i] == $dic["consonnes"][$k]) {
                $consonnes = $consonnes + 1 ;
            }
        }
         $i++;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <th>
            sdcsdc
        </th>
        <th>zdceczdssdec</th>
        <tr>
            <td> 
                <?php
                    echo $consonnes
                ?>
            </td>
            <td> 
                <?php
                    echo $voyelles
                ?>
            </td>
        </tr>
    </table>
</body>
</html>




 