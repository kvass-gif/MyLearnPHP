<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .chess-board {
            border: 1px solid rgb(128, 128, 128);
        }

        .chess-board td {

            width: 40px;
            height: 40px;
            border: 1px solid black;

        }
    </style>
</head>

<body>
    <table class="chess-board" cellpadding="3px" cellspacing="0px">
        <tbody>
            <?php for ($i = 1; 6 >= $i; $i++) : ?>
                <tr>
                    <?php for ($j = 1; 5 >= $j; $j++) : ?>
                        <td align="center" valign="center"><?= strval($i) .
                                                                "*" .
                                                                strval($j) .
                                                                "=" .
                                                                strval($i * $j) ?>
                        </td>
                    <?php endfor ?>
                </tr>
            <?php endfor ?>
</body>

</html>