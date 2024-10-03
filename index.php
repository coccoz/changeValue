<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $linkBase = "https://xkcd.com";
        $numLink = 5;

        for ($i=1; $i < $numLink; $i++) { 
            echo("<a href='$linkBase/$i' target='_blank' rel='noopener noreferrer'>Pagina $i</a><br>");
        }
    ?>

</body>
</html>