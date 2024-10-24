<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultati</title>
</head>
<body>

<?php
$nome = $_POST['nome'];
$costo = $_POST['cognome'];
$quantita = $_POST['q'];
$stato = $_POST['stato'];
$metodo = $_POST['metodo'];

if($_POST['corsi[]'] == null)
{
    $corsi = [];
}
else
{
    $corsi = $_POST['corsi[]'];
}

echo "<p>Nome: $nome</p>";
echo "<p>Cognome: $cognome</p>";
echo "<p>Quantità: $q</p>";
echo "<p>Stato: $stato</p>";
echo "<p>Metodo di pagamento: $metodo</p>";



?>

</body>
</html>
