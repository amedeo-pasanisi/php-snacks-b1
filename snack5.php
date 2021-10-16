<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack5</title>
</head>
<body>
    <!--
        Prendere un paragrafo abbastanza lungo, contenente diverse frasi,
        suddividerlo in tanti paragrafi.
        Ogni punto un nuovo paragrafo.
    -->
    <?php
        $longParagraph = "Lorem ipsum dolor sit amet. consectetur adipisicing elit. Officiis facilis suscipit ut eaque rem et ipsum perspiciatis quisquam. consequatur? Amet, rerum voluptate. Ipsum eligendi sapiente repellendus. nostrum, fugiat quia quod?";
        $paragraphs = explode('.', $longParagraph);
    ?>
    <div style = "display:flex; flex-direction:column; justify-content: center; align-items:center; height: 100vh;">
        <?php foreach ($paragraphs as $paragraph) { ?>
            <p> <?php echo $paragraph ?></p>
        <?php } ?>
    </div>
</body>
</html>