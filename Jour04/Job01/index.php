<form action="index.php" method="get">
    <label for="name">Indiquez votre Nom</label>
    <input type="text" name="nom" id="name">
    <br>
    <label for="password">Votre mot de passe</label>
    <input type="password" name="mot_de_passe" id="password">
    <br>
    <label for="E-mail">Votre E-mail</label>
    <input type="email" name="email" id="email">
    <br>
    <input type="submit" value="Envoyer">

</form>

<?php

    $i=0;
    foreach ($_GET as $key) {
        $i++;
    }
    echo "Il y'a $i d'arguments<br>";

?>