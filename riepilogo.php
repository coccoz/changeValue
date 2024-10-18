<!DOCTYPE html>
<html lang="en">

<style>
    body
    {
        margin-right: auto;
        margin-left: auto;

    }

    table, th, td
    {
        border: solid 1px black;
        border-collapse: collapse;
        margin-right: auto;
        margin-left: auto;
    }
</style>

<body>


<?php 
echo "<h1>Dati inviati: </h1>";
    echo "<table>";
        echo "<tr>";
            echo "<th>Nome</th>";
            echo "<th>Cognome</th>";
            echo "<th>Email</th>";
        echo "</tr>";
        echo "<tr>";
            echo "<td>"; echo $_GET['name'];echo "</td>";
            echo "<td>"; echo $_GET['surname'];echo "</td>";
            echo "<td>"; echo $_GET['email'];echo "</td>";
        echo "</tr>";
    echo "</table>";
?>



    
</body>
</html>