<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $partite = [
            [
                "squadraCasa" => "rossi",
                "squadraOspite" => "blu",
                "puntiCasa" => 5,
                "puntiOspite" => 2
            ],
            [
                "squadraCasa" => "gialli",
                "squadraOspite" => "verdi",
                "puntiCasa" => 3,
                "puntiOspite" => 3
            ],
            [
                "squadraCasa" => "arancioni",
                "squadraOspite" => "viola",
                "puntiCasa" => 1,
                "puntiOspite" => 2
            ]
        ];
        for($i=0; $i<count($partite); $i++) {
            $partita = $partite[$i];
            echo "<h2>" . $partita["squadraCasa"] . " - " . $partita["squadraOspite"] . " | " . $partita["puntiCasa"] . "-" . $partita["puntiOspite"] . "</h2>";
        }
    ?>
</body>
</html>