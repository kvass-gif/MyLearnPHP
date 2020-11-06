<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        TABLE {
            width: 500px;
            border-collapse: collapse;
            font-family: Arial, Helvetica, sans-serif;
            font-size: small;

        }

        TD,
        TH {
            padding: 5px;
            border: 1px solid black;

        }

        TD {
            font-weight: normal;
        }

        TH {
            background: #87CEEB;
            font-weight: normal;
        }

        tr .firstRow {
            width: 60%
        }

        tr .industry {
            color: #0E9FDA;
        }

        tr .lineCode {
            opacity: .5;
        }

        td.value {
            font-weight: bold;

        }

        img {
            width: 15px;
            height: 15px;
        }

        div.valueH {
            display: inline-block;
        }

        div.fullValueH {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th class="firstRow"><?= $header[1] ?></th>
            <th><?= $header[4] ?></th>
            <th>
                <div class="fullValueH"><img src="down-arrow.png">
                    <div class="valueH"><?= $header[5] ?></div>
                </div>
            </th>
        </tr>
        <?php foreach ($onOutput as $value) : ?>

            <tr>
                <td class="firstRow industry"><?= $value[0] ?></td>
                <td class="lineCode"><?= $value[1] ?></td>
                <td class="value"><?= $value[2] ?></td>
            </tr>


        <?php endforeach ?>

    </table>
</body>

</html>