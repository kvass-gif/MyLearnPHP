<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        textarea {
            resize: none;
            width: 100%;
        }

        div.frame {
            display: inline-block;
            width: 500px;
        }

        div.htext {
            background-color: #d6a018;
            margin-bottom: 10px;
            padding: 5px;
        }
    </style>


</head>

<body>
    <h2>Note contents</h2>
    <div class="frame">
        <div class="htext">This note was destroyed. If you need to keep it, copy it before closing this window.</div>
        <textarea name="text" id="text" cols="50" rows="10" disabled><?= $original_plaintext ?></textarea>
        <br>

    </div>


</body>

</html>