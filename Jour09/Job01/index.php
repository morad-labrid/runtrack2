<?php

    $sql = mysqli_connect('localhost', 'root', 'root', 'jour08');
    $etudiants = mysqli_query($sql, "SELECT * FROM etudiants;");
    $result = mysqli_num_rows($etudiants);
    $row = mysqli_fetch_all ( $etudiants );

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
                <th>Prénom</th>
                <th>Nom</th>
                <th>Naissance</th>
                <th>Genre</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $row[0][0]  ?></td>
                <td><?php echo $row[0][1]  ?></td>
                <td><?php echo $row[0][2]  ?></td>
                <td><?php echo $row[0][3]  ?></td>
                <td><?php echo $row[0][4]  ?></td>
                <td><?php echo $row[0][5]  ?></td>
            </tr>
            <tr>
                <td><?php echo $row[1][0]  ?></td>
                <td><?php echo $row[1][1]  ?></td>
                <td><?php echo $row[1][2]  ?></td>
                <td><?php echo $row[1][3]  ?></td>
                <td><?php echo $row[1][4]  ?></td>
                <td><?php echo $row[1][5]  ?></td>
            </tr>
            <tr>
                <td><?php echo $row[2][0]  ?></td>
                <td><?php echo $row[2][1]  ?></td>
                <td><?php echo $row[2][2]  ?></td>
                <td><?php echo $row[2][3]  ?></td>
                <td><?php echo $row[2][4]  ?></td>
                <td><?php echo $row[2][5]  ?></td>
            </tr>
            <tr>
                <td><?php echo $row[3][0]  ?></td>
                <td><?php echo $row[3][1]  ?></td>
                <td><?php echo $row[3][2]  ?></td>
                <td><?php echo $row[3][3]  ?></td>
                <td><?php echo $row[3][4]  ?></td>
                <td><?php echo $row[3][5]  ?></td>
            </tr>
            <tr>
                <td><?php echo $row[4][0]  ?></td>
                <td><?php echo $row[4][1]  ?></td>
                <td><?php echo $row[4][2]  ?></td>
                <td><?php echo $row[4][3]  ?></td>
                <td><?php echo $row[4][4]  ?></td>
                <td><?php echo $row[4][5]  ?></td>
            </tr>
            <tr>
                <td><?php echo $row[5][0]  ?></td>
                <td><?php echo $row[5][1]  ?></td>
                <td><?php echo $row[5][2]  ?></td>
                <td><?php echo $row[5][3]  ?></td>
                <td><?php echo $row[5][4]  ?></td>
                <td><?php echo $row[5][5]  ?></td>
            </tr>
            <tr>
                <td><?php echo $row[6][0]  ?></td>
                <td><?php echo $row[6][1]  ?></td>
                <td><?php echo $row[6][2]  ?></td>
                <td><?php echo $row[6][3]  ?></td>
                <td><?php echo $row[6][4]  ?></td>
                <td><?php echo $row[6][5]  ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>