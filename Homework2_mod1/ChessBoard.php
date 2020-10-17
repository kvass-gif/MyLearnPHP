<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        div {
            border: 3px solid rgb(95, 158, 160);
            padding: 3px;
            border-style: ridge;
            display: inline-block;
        }

        .chess-board {
            border-spacing: 0;
            width: 270px;
            border: 1px solid rgb(128, 128, 128);

        }

        .chess-board td {

            width: 30px;
            height: 30px;

        }

        .chess-board .light {
            background: #eee;
            filter: blur(2px);
        }

        .chess-board .dark {
            background: #000;
            border: 2px solid rgb(128, 128, 128);
            border-style: ridge;
        }
    </style>
</head>

<body>

    <div>

        <table class="chess-board">
            <tbody>
                <?php for ($i = 0; 8 > $i; $i++) : ?>
                    <tr>
                        <?php for ($j = 0; 8 > $j; $j++) : ?>
                            <td class=<?= ($j + $i) % 2 == 0 ? "dark" : "light" ?>></td>
                        <?php endfor ?>
                    </tr>
                <?php endfor ?>
    </div>

</body>

</html>