<!DOCTYPE html>

<html lang='fr'>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Mon super blog</title>
</head>

<body>
    <h1>Mon super blog</h1>
    <?php require(ROOT . '/src/view/shared/_nav.php') ?>
    <div class="container">
        <?php
        echo $content
        ?>
    </div>
</body>

</html>