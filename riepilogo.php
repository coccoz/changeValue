<!DOCTYPE html>
<html lang="en">

<style>
    body
    {
        margin-right: auto;
        margin-left: auto;

    }

    table, th, tr
    {
        border: solid 1px black;
        border-collapse: collapse;
    }
</style>

<body>

<h1>Dati inviati: </h1>
<?php 
    echo "<table>";
        echo "<tr>";
            echo "<th>Company</th>";
            echo "<th>Contact</th>";
            echo "<th>Country</th>";
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