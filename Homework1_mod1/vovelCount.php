<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="vovelCount.php" method="POST">
        <input type="text" name="str" id="str" placeholder="Enter the string">
        <input type="submit" name="submit" id="submit" value="Send">
    </form>

    <?php
    if (isset($_POST["submit"])) {
        if (!empty($_POST["str"])) {
            $vovelLen = strlen(preg_replace('/[^aeiou]/u', '', $_POST["str"]));
            echo  "The number of lowercase vowels in the text: " . $vovelLen;
        } else echo "The string most be at least one symbol";
    }
    ?>
</body>

</html>