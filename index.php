<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function scegliColore($in)
        {
            switch($in)
            {
                case "r":
                    return "red";
                break;

                case "g":
                    return "green";
                break;

                case "b":
                    return "blue";
                break;

                default:
                    return "black";
                break;
            }

        }

        $c = scegliColore("g");

        echo("<p style='color: $c'>Questo paragrafo ha la proprietà color con valore XXX</p>");
    ?>

</body>
</html>