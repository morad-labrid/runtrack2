<?php

    if (isset($_POST["reset"])) {
        unset($_COOKIE['nbvisits']);
    }

    if (!isset($_COOKIE['nbvisits'])) $_COOKIE['nbvisits'] = 0;
        $visits = $_COOKIE['nbvisits'] + 1;
        setcookie('nbvisits',$visits,time()+3600*24*365);
    
    if ($visits > 1) {
        echo "vous avez visiter $visits fois cette page";
    } 
    else { // First visit
        echo("Bienvenue ! c'est votre premiere visite");
    }

?>

<form action="" method="POST">
<button name="reset">Réinitialiser</button>
</form>