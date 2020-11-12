<?php

    $sql = mysqli_connect('localhost', 'root', 'root', 'jour08');
    $etudiants = mysqli_query($sql, "SELECT prenom, nom, naissance FROM etudiants WHERE sexe = 'Femme'");
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
                <th>Prénom</th>
                <th>Nom</th>
                <th>Naissance</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $row[0][0]  ?></td>
                <td><?php echo $row[0][1]  ?></td>
                <td><?php echo $row[0][2]  ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>