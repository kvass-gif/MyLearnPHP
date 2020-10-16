<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="isPalindrome.php" method="POST">
        <input type="text" name="str" id="str" placeholder="Enter the palindrome">
        <input type="submit" name="submit" id="submit" value="Send">
    </form>


    <?php
    function isWord($str)
    {
        $lenBef = strlen($str);
        $lenAf = strlen(preg_replace('/[^a-z]/ui', '', $str));

        $res = ($lenBef === $lenAf && $lenAf != 0) ? true : false;

        return $res;
    }
    function isPalindrome($str)
    {
        if (empty($str))
            return false;

        $len = strlen($str);
        $checkLen = floor($len / 2);
        $len--;
        $str = strtolower($str);
        for ($i = 0; $checkLen > $i; $i++)
            if ($str[$i] != $str[$len - $i])
                return false;

        return true;
    }

    if (isset($_POST["submit"])) {

        $str = $_POST["str"];
        if (isWord($str))
            echo isPalindrome($str) ? "true" : "false";
        else if (empty($str))
            echo "This string was empty";
        else
            echo $str . " - is not a word";
    }
    ?>
</body>

</html>