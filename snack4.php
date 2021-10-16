<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack4</title>
</head>
<body>
    <!--
        Creare un array con 15 numeri casuali ( da 1 a 100),
        tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
    -->
    <?php
        $numbers = [];
        while (count($numbers) != 15) {
            $rndNumber = rand(1, 100);
            if (!in_array($rndNumber, $numbers)) $numbers[] = $rndNumber;
        }
    ?>
</body>
</html>