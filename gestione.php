<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultati</title>
</head>
<body>
<?php
$nome = $_POST["nome"];
$costo = $_POST["costo"];
$quantita = $_POST["quantita"];
$oggetto_nuovo = isset($_POST["oggetto_nuovo"]) ? 'Oggetto non usato' : 'Oggetto usato';
$metodo = $_POST["metodo"];

$tot = intval($costo) * intval($quantita);

echo "<p>Nome: $nome</p>";
echo "<p>Costo: $costo</p>";
echo "<p>Quantità: $quantita</p>";
echo $oggetto_nuovo;
echo "<p>Metodo di pagamento: $metodo</p>";


if($oggetto_nuovo == "Oggetto usato")
{
    $tot = $tot - ($tot/100)*20;
}

if($metodo == "carta")
{
    $tot = $tot + 2;
}

echo "totale:  $tot";
?>

</body>
</html>
