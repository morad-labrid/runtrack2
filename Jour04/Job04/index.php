<form action="index.php" method="post">
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
<table>
<th>Les arguments</th>
<th>Les valeurs</th>
<?php

    foreach ($_POST as $key => $value) {
        echo "<tr>";
        echo "<td>";
        echo $key;
        echo "</td>";
        echo "<td>";
        echo $value;
        echo "</td>";
        echo "</tr>";
    }
    
?>

</table>


