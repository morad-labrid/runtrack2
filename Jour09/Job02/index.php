<?php

    $sql = mysqli_connect('localhost', 'root', 'root', 'jour08');
    $salles = mysqli_query($sql, "SELECT nom, capacite FROM salles;");
    $result = mysqli_num_rows($salles);
    $row = mysqli_fetch_all ( $salles );

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
                <th>Nom</th>
                <th>Capacité</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $row[0][0]  ?></td>
                <td><?php echo $row[0][1]  ?></td>
            </tr>
            <tr>
                <td><?php echo $row[1][0]  ?></td>
                <td><?php echo $row[1][1]  ?></td>
            </tr>
            <tr>
                <td><?php echo $row[2][0]  ?></td>
                <td><?php echo $row[2][1]  ?></td>
            </tr>
            <tr>
                <td><?php echo $row[3][0]  ?></td>
                <td><?php echo $row[3][1]  ?></td>
            </tr>
            <tr>
                <td><?php echo $row[4][0]  ?></td>
                <td><?php echo $row[4][1]  ?></td>
            </tr>
            <tr>
                <td><?php echo $row[5][0]  ?></td>
                <td><?php echo $row[5][1]  ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>