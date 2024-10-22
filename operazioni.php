<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operazioni</title>
    <style>
        .error {
            color: red;
        }
        table, th, td {
            border: solid 1px black;
            border-collapse: collapse;
        }
        .impossible {
            color: red;
        }
    </style>
</head>
<body>

<?php
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];

if (empty($n1) || empty($n2)) {
    echo '<p class="error">Errore: almeno uno dei due numeri è vuoto</p>';
    echo '<a href="numeri.html">Torna indietro</a>';
} else {
    $n1 = intval($n1);
    $n2 = intval($n2);

    echo '<h3>Numeri inseriti:</h3>';
    echo '<ul>';
    echo '<li>' . $n1 . '</li>';
    echo '<li>' . $n2 . '</li>';
    echo '</ul>';

    $addizione = $n1 + $n2;
    $sottrazione = $n1 - $n2;
    $moltiplicazione = $n1 * $n2;
    $divisione = $n1 / $n2;

    echo '<h3>Risultati delle operazioni:</h3>';
    echo '<table>';
    echo '<tr><th>Operazione</th><th>Risultato</th></tr>';
    echo '<tr><td>Addizione</td><td>' . $addizione . '</td></tr>';
    echo '<tr><td>Sottrazione</td><td>' . $sottrazione . '</td></tr>';
    echo '<tr><td>Moltiplicazione</td><td>' . $moltiplicazione . '</td></tr>';
    echo '<tr><td>Divisione</td><td>' . $divisione . '</td></tr>';
    echo '</table>';
}
?>

</body>
</html>
