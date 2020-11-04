<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais";
$i=0;
$x=-1;

while (isset($str[$i])){
    $i++;
}

while ($x < $i -1){
    echo $str[$x];
    $x++;
}
?>