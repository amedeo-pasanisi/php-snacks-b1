<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack1</title>
</head>
<body>
    <!--
        Creiamo un array contenente le partite di basket di un’ipotetica tappa
        del calendario.
        Ogni array avrà una squadra di casa e una squadra ospite,
        punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
        Stampiamo a schermo tutte le partite con questo schema.
        Olimpia Milano - Cantù | 55-60
    -->
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