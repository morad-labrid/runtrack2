<?php

session_start();

if (isset($_POST["reset"])) {
    session_destroy();
    if (session_destroy() == true) {
        $_SESSION["prenoms"] = null;
    }
} else {
    $_SESSION["prenoms"][] = $_POST["prenom"];
    foreach ($_SESSION["prenoms"] as $_SESSION["prenom"]) {
        if (isset($_POST["prenom"])) {
            echo "$_SESSION[prenom]<br>";
        }
    }
}

?>


<form action="" method="post">

<br><br>
<label for="prenom">Entrez votre Prénom:</label><br>
<input type="text" name="prenom" id="prenom">

<button name="submit">Valider</button>
<br><br>
<button name="reset">Réinitialiser</button>

</form>