<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack3</title>
</head>
<body>
    <!--
        Creare un array di array.
        Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007
        e come valore un array di post associati a quella data.
        Stampare ogni data con i relativi post.
    -->
    <?php
        $posts = [
            '01-01-2007' => [
                'post1','post2','post3'
            ],
            '02-01-2007' => [
                'post4','post5','post6'
            ],
            '03-01-2007' => [
                'post7','post8','post9'
            ]
        ];
    ?>
    <?php foreach ($posts as $key => $post) {?>
        <div style = "display:flex; flex-direction:column; align-items:center; padding: 30px;">
            <?php echo $key; ?>
            <?php foreach ($post as $text) {?>
                <p>
                    <?php echo $text; ?>
                </p>
            <?php } ?>
        </div>
    <?php } ?>
</body>
</html>