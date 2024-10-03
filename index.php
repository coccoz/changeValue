<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function generaUrlImmagine($w, $h)
        {
            return "https://picsum.photos/$w/$h";
        }

        $i = generaUrlImmagine("1900", "900");

        //echo("<a href='$i'>immagine</a>");

        echo("<img src='$i' alt='alternatetext'>")
        
    ?>

</body>
</html>