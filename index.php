<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <select name="filmpreferito" id="cars">

        <?php

            $film = ["l'impero colpisce ancora", 'fast and furious', 'inside out', 'amici miei', 'cars 2'];
            $fi = 0;

            for ($i=0; $i < sizeof($film); $i++) 
            { 
                $fi = "f" . $i;
                echo("<option value='$fi'>$film[$i]</option>");
            }


        ?>

    </select>

</body>
</html>