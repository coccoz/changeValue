<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultati</title>
</head>
<body>

<?php
$nome = $_GET['nome'];
$cognome = $_GET['cognome'];
$data_nascita = $_GET['data_nascita'];
$orario_arrivo = $_GET['orario_arrivo'];
$trasporto = $_GET['trasporto'];
$corsi = $_GET['corsi'];

echo "<p>Nome: $nome</p>";
echo "<p>Cognome: $cognome</p>";
echo "<p>Data di nascita: $data_nascita</p>";
echo "<p>Orario di arrivo a casa: $orario_arrivo</p>";
echo "<p>Come vieni a scuola: $trasporto</p>";

echo "<p>Corsi pomeridiani seguiti:</p>";
echo "<ul>";
foreach ($corsi as $corso) {
    echo "<li>$corso</li>";
}
echo "</ul>";
?>

</body>
</html>
