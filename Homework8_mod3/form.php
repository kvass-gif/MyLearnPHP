<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        textarea {
            resize: vertical;
        }
    </style>
</head>

<body>
    <!-- буде відправляти дані в скрипт що буде записувати дані в файл -->
    <h2>New note</h2>
    <form action="hendler.php" method="post">
        <textarea name="text" id="text" cols="50" rows="10"></textarea>
        <br>
        <input type="submit" value="send">
    </form>
</body>

</html>