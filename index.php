<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        table
        {
            margin-top: 110px;
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
            margin-left: auto;
            margin-right: auto;

        }

        td, th
        {
            padding: 10px;
            border: 1px solid black;
        }
    </style>
    

    <?php
       
        $indirizzo = "via della colombella";
        $mq = 110.4;
        $prezzomq = 140.6;
        $prezzo = $mq * $prezzomq;

        $casa = ["indirizzo" => $indirizzo, "metri quadri" => $mq, "prezzo al metro quadro" => $prezzomq, "prezzo totale" => $prezzo];

        echo("<table>");
        echo("<tr>");
        foreach($casa as $key => $v)
        {
            echo("<th>$key</th>");
        };
        echo("</tr>");
        echo("</tr>");
        foreach($casa as $value)
        {
            echo("<td>$value</td>");
        };
        echo("</tr>");
        echo("</table>")

    ?>


</body>
</html>