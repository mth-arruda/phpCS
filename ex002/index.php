<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>
<body>

    <h1> Example of PHP</h1>
    <?php 
    date_default_timezone_set("America/Sao_Paulo");
        echo "Today is day: " .date("d/M/Y"); ?>
        <br>

        <?php
        date_default_timezone_set("America/Sao_Paulo");
        echo "E a hora atual is: " .date("G:i:s T");
    ?>
    
</body>
</html>