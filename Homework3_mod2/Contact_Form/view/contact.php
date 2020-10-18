<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="send.php" method="POST">
        <label for="name">Name:&#160;&#160;</label>
        <input type="text" id="name" name="name" value="<?= (!empty($_POST["submit"])) ? $_POST["name"] : "" ?>"><br><br>
        <label for="email">Email:&#160;&#160;</label>
        <input type="email" id="email" name="email" value="<?= (!empty($_POST["submit"])) ? $_POST["email"] : "" ?>"><br><br>
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" value="<?= (!empty($_POST["submit"])) ? $_POST["subject"] : "" ?>"><br><br>
        <p style="margin: 0;">Message:</p>

        <textarea style="resize: vertical;" id="textarea" name="textarea" cols="50" rows="4" value="<?= (!empty($_POST["submit"])) ? $_POST["textarea"] : "" ?>"></textarea><br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>

</html>