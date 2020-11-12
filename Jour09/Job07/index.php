<?php

    $db = mysqli_connect('localhost', 'root', 'root', 'jour08');
    $sql = mysqli_query($db, "SELECT SUM(superficie) FROM etage");

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
                <th>superficie_totale</th>
            </tr>
        </thead>
        <tbody>
        <?php   
            while ($row = mysqli_fetch_array($sql)) {
                echo '<tr><td>'.$row['SUM(superficie)'].'</td>';
            }
        ?>
        </tbody>
    </table>
</body>
</html>