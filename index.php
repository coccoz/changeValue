<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $lu = rand(50,500);

        function sfondoCasuale($l)
        {
            if($l<150)
            {
                return "#7FFFD4";
            }
            else if($l>=150&&$l<=250)
            {
                return "#1E90FF";
            }
            else if($l>250)
            {
                return "#0000FF";
            }
        }

        $ris = sfondoCasuale($lu);

        $h = $lu * 2 . "px";

        $lun = $lu . "px";

        echo("<div style='width: $lun; height: $h; background-color: $ris'>prova</div>");

    ?>

</body>
</html>