<?php

    session_start();
    if (isset($_POST["reset"])) {
        session_unset();
    }
    if (!isset ($_SESSION['nbvisites'])) {
        $_SESSION['nbvisites'] = 1;
    }
    else {
        $_SESSION['nbvisites'] ++;
        
    }
    echo "Vous avez visiter $_SESSION[nbvisites] fois notre site";
    

?>

<form action="" method="POST">
<button name="reset">Réinitialiser</button>
</form>