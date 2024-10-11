<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $cognome = "ballerini";
        $nome = "cosimo";
        $listaVoti = [];
        $testo = "lista voti: ";

        for ($i = 0; $i < 5; $i++) { 
            $listaVoti[$i] = rand(2, 10);
        }

        $studente = ["cognome" => $cognome, "nome" => $nome, "testo" => $testo, "listaVoti" => $listaVoti];

        echo "<ul>";

        foreach ($studente as $key => $value) 
        {
            if (is_array($value)) //vedo se questo campo è un array
            {
                echo "<li>$key: <ol>";
                foreach ($value as $voto) 
                {
                    echo "<li>$voto</li>";
                }
                echo "</ol></li>";
            } 
            else //se non e un array stampo normalmente
            {
                echo "<li>$key: $value</li>";
            }
        }

        echo "</ul>";
    ?>

</body>
</html>
