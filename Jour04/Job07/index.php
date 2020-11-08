<form action="index.php" method="post">
    <label for="largeur">Indiquez votre Nom</label>
    <input type="text" name="largeur" id="largeur">
    <br>
    <label for="hauteur">Votre mot de passe</label>
    <input type="text" name="hauteur" id="hauteur">
    <br>
    <input type="submit" value="Envoyer">

</form>

<?php
$i = 0;
$i2 = 0;
$x = 5;
$s = "&nbsp;*";
$t = "/";
while ($i2 < $x) {
    while ($i < $x) {
        echo  "$s";
        $i++;
    }
    echo "$t<br>";
    echo $s;
    echo $t;
    $i2++;
}

?>