<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping cart</title>
    <link rel="stylesheet" href="http://localhost:8080/Homework/Homework9_mod4/style.css">
</head>

<body>

    <div id="container">

        <div style="width: 60%;">
            <!-- може бути обо products або cart -->
            <?php require_once $_page . ".php"; ?>
        </div>


        <div style="position:fixed; right: 50px; top: 0px; width: 30%">
            <!-- запускається лише тоді коли products -->
            <?php if ($_page == 'products') require_once "cartBar.php"; ?>
        </div>

    </div>
</body>

</html>