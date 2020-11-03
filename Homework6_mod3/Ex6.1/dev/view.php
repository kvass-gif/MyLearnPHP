<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="http://localhost:8080\Homework\Homework6_mod3\Ex6.1\dev\style.css">
</head>

<body>

    <ul class="icon">
        <?php foreach ($lines as $line) : ?>
            <li><?= $line ?></li>
        <?php endforeach ?>
    </ul>

</body>

</html>