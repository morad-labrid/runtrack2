


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
    Je suis
    <input type="radio" name="Genre" value="Femme"> une femme
    <input type="radio" name="Genre" value="Homme"> un homme
    <br>
    <input type="submit" value="Envoyer">

</form>

<?php

    var_dump($_GET);


?>