<!DOCTYPE html>

<html lang="en">

    <style>

        body {
            margin-right: auto;
            margin-left: auto;
            text-align: center;
        }

        table, th, td {
            border: solid 1px black;
            border-collapse: collapse;
            margin-right: auto;
            margin-left: auto;
        }

        .info-div {
            background-color: lightblue;
        }

        .body-div {
            background-color: orange;
            width: 50%;
            margin-right: auto;
            margin-left: auto;

        }

        .stats-div {
            background-color: gray;
        }

    </style>

    <body>

        <h1>Mail creata</h1>

        <h3>Informazioni</h3>

        <div class="info-div">

            <p>Mittente: <?php echo $_POST['mailm']; ?></p>

            <p>Destinatario: <?php echo $_POST['maild']; ?></p>

            <p>Oggetto: <?php echo $_POST['obj']; ?></p>

        </div>

        <h3>Corpo della mail</h3>

        <div class="body-div">

            <p><?php echo $_POST['content']; ?></p>

        </div>

        <hr>

        <h3>Statistiche corpo mail</h3>

        <div class="stats-div">

            <p>Lunghezza del corpo della mail: <?php echo strlen($_POST['content']); ?> caratteri</p>

            <p>Numero di parole: <?php echo str_word_count($_POST['content']); ?></p>

        </div>
        
    </body>
</html>
