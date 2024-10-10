<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php
        $domanda = "Qual è il pianeta più vicino al sole?";
        $risposte = ["Venere", "Terra", "Marte", "Mercurio", "Giove"];

        echo("<p><b><i>$domanda</p></b></i>");

        echo("<br>");

        for ($i=0; $i < sizeof($risposte); $i++) { 
            echo("<input type='radio' name='risposte' id='pianeti' value='risposta'/>
            <label for='pianeti'>$risposte[$i]</label> <br>"
        );
            
        }


    ?>


</body>
</html>