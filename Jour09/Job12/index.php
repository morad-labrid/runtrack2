<?php

    $db = mysqli_connect('localhost', 'root', 'root', 'jour08');
    $sql = mysqli_query($db, "SELECT nom, prenom, naissance FROM etudiants WHERE naissance  BETWEEN '1998-01-01' AND '2018-12-31'");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabaleau</title>
<style>
table   {
   border-collapse: collapse;
}
 
table  th {
   border: 1px solid black;
   padding: 5px;
}
table  td {
   border: 1px solid black;
   padding: 5px;
}
</style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Date de naissance</th>
            </tr>
        </thead>
        <tbody>
        <?php   
            while ($row = mysqli_fetch_array($sql)) {
                echo "<tr><td>$row[nom]</td>";
                echo "<td>$row[prenom]</td>";
                echo "<td>$row[naissance]</td></tr>";
            }
        ?>
        </tbody>
    </table>
</body>
</html>