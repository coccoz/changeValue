<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $num = 50;
        $tipe = "tipo";

        function stampaLista($n, $t)
        {
            if($t=="o")
            {
                $lista="ol";
            }
            else
            {
                $lista="ul";
            }
            
            echo"<$lista>";

            for ($i=0; $i <= $n; $i++) 
            { 
                if($i%2==0||$i%5==0)
                {
                    echo"<li>$i</li>";
                }
            }

            echo"<$lista>";
        }

        stampaLista($num, $tipe);


    ?>

</body>
</html>