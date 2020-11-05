<form action="index.php" method="git">
    <label for="nombre">Entrer un chiffre =></label>
    <input type="number" name="nombre" id="nombre">
    <input type="submit" value="Entrer">
</form>

<?php

if ($_GET["nombre"]%2 == 0) {
    echo "votre chiffre est un chiffre PAIR";
}
else {
    echo "votre chiffre est un chiffre IMPAIR";
}

?>