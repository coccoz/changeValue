<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestione Prenotazione</title>
    <style>
        .error {
            color: red;
        }
        table, th, td {
            border: solid 1px black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<?php
date_default_timezone_set('Europe/Rome');
$dataOraPrenotazione = date("d-m-Y H:i");

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$tavolo = $_POST['tavolo'];
$orario = $_POST['orario'];
$note = $_POST['note'];
$antipasto = isset($_POST['antipasto']);
$primo = isset($_POST['primo']);
$secondo = isset($_POST['secondo']);
$parcheggio = $_POST['parcheggio'];

if (!$antipasto && !$primo && !$secondo) {
    echo "<p class='error'>Errore: devi selezionare almeno un pasto.</p>";
    echo "<p>Data e ora della prenotazione: $dataOraPrenotazione</p>";
    echo '<a href="prenotazione.html">Ritorna alla pagina di prenotazione</a>';
    exit;
}

if ($antipasto && !$primo && !$secondo) {
    echo "<p class='error'>Errore: Non è possibile ordinare solo l'antipasto.</p>";
    echo "<p>Data e ora della prenotazione: $dataOraPrenotazione</p>";
    echo '<a href="prenotazione.html">Ritorna alla pagina di prenotazione</a>';
    exit;
}

$prezzoTotale = 0;
if ($antipasto) $prezzoTotale += 5;
if ($primo) $prezzoTotale += 6;
if ($secondo) $prezzoTotale += 7;

$sconto = 0;
if ($primo && $secondo && !$antipasto) {
    $sconto = 0.10;  // 10% discount for primo and secondo
} elseif ($antipasto && $primo && $secondo) {
    $sconto = 0.15;  // 15% discount for all three
}

$prezzoTotale -= $prezzoTotale * $sconto;

if ($parcheggio == 'custodito') {
    $prezzoTotale += 5;
} elseif ($parcheggio == 'non custodito') {
    $prezzoTotale += 3;
}

$camerieri = ["Marco", "Luca", "Sofia", "Giulia", "Andrea"];
$cameriereAssegnato = $camerieri[array_rand($camerieri)];

echo "<h2>Resoconto Prenotazione</h2>";
echo "<table>";
echo "<tr><th>Campo</th><th>Dettaglio</th></tr>";
echo "<tr><td>Nome</td><td>$nome</td></tr>";
echo "<tr><td>Cognome</td><td>$cognome</td></tr>";
echo "<tr><td>Numero del tavolo</td><td>$tavolo</td></tr>";
echo "<tr><td>Orario</td><td>$orario</td></tr>";
echo "<tr><td>Note</td><td>$note</td></tr>";
echo "<tr><td>Antipasto</td><td>" . ($antipasto ? "Sì" : "No") . "</td></tr>";
echo "<tr><td>Primo</td><td>" . ($primo ? "Sì" : "No") . "</td></tr>";
echo "<tr><td>Secondo</td><td>" . ($secondo ? "Sì" : "No") . "</td></tr>";
echo "<tr><td>Parcheggio</td><td>$parcheggio</td></tr>";
echo "<tr><td>Cameriere assegnato</td><td>$cameriereAssegnato</td></tr>";
echo "<tr><td>Prezzo totale</td><td>€$prezzoTotale</td></tr>";
echo "<tr><td>Data e ora della prenotazione</td><td>$dataOraPrenotazione</td></tr>";
echo "</table>";
?>
</body>
</html>
