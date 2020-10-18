<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Google.com!</h1>
    <p>
        Welcome to Google.com <br />
        Google now requires your full name and credit card number before you are
        allowed to make a search.
    </p>
    <form action="phish.php" method="post">
        <fieldset>
            Name: <input type="text" name="name" /><br />
            Credit Card Number: <input type="text" name="ccn" /><br /> Search Query:
            <input type="text" name="query" /> <br />
            <input type="submit" value="I’m pheeling lucky" />
        </fieldset>
    </form>


</body>

</html>