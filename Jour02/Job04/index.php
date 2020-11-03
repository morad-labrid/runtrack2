<?php

$num = 0;

while ($num < 100)
{
    $num++;

    if ($num %3 == 0 && $num %5 == 0){
        echo "FizzBuzz<br>";
    }

    else if ($num % 5 == 0){
        echo "Buzz<br>";
    }

    else if ($num % 3 == 0){
        echo "Fizz<br>";
    }
    else 
        echo "$num<br>";

}
?>

