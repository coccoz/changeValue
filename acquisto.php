<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sondaggio</title>
</head>
<body>
    <form action="gestione.php" method="POST" id="qform">
        Nome: <input type="text" name="nome"><br><br>
        Costo: <input type="text" name="costo"><br><br>
        Quantità:
        <select name="quantita" id="quantita" form="qform">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select><br><br>

        Oggetto nuovo? <input type="checkbox" name="oggetto_nuovo"><br><br>
        Metodo di pagamento:<br><br>
        <input type="radio" name="metodo" value="paypal">Paypal<br>
        <input type="radio" name="metodo" value="visa">Visa<br>
        <input type="radio" name="metodo" value="altro">Altro<br><br>
        <input type="submit" value="Invia">
    </form>
</body>
</html>
