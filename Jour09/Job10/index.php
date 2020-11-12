<?php

    $db = mysqli_connect('localhost', 'root', 'root', 'jour08');
    $sql = mysqli_query($db, "SELECT * FROM salles ORDER BY capacite ASC");

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
                <th>Id</th>
                <th>Nom</th>
                <th>Id_etage</th>
                <th>capacité</th>
            </tr>
        </thead>
        <tbody>
        <?php   
            while ($row = mysqli_fetch_array($sql)) {
                echo "<tr><td> $row[id] </td>";
                echo "<td> $row[nom] </td>";
                echo "<td> $row[id_etage] </td>";
                echo "<td> $row[capacite] </></td>";
            }
        ?>
        </tbody>
    </table>
</body>
</html>