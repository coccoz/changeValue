<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sondaggio</title>
</head>
<body>
    <form action="gestione.php" method="GET">

        Nome: <input type="text" name="nome"><br>

        Costo: <input type="text" name="cognome"><br>

        Quantità: 

        <select name="cars" id="cars" form="carform">
            <option value="q1">1</option>
            <option value="q2">2</option>
            <option value="q3">3</option>
            <option value="q5">5</option>
            <option value="q10">10</option>

        </select><br>

        Oggetto nuovo? <input type="checkbox" name="orario_arrivo"><br>

        Metodo di pagamento:<br>
        <input type="radio" name="orario_arrivo"><br>
        <input type="radio" name="orario_arrivo"><br>

        <input type="submit" value="Invia">

        

    </form>
</body>
</html>
