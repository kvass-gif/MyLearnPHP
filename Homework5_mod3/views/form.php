<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Day in Month</title>
    <style>
        body {
            height: 100vh;
            width: 100%;
        }
    </style>
</head>

<body>

    <div class="container p-5 w-100 h-100 d-flex justify-content-center flex-column align-items-center">

        <form action="index.php" method="GET" class="form">
            <input type="number" name="year" id="year" step="1" min="2020" value="2020" class="form-control shadow-sm mb-3">

            <select name="month" id="month" class="form-control shadow-sm">
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>


            <button type="submit" class="btn btn-primary shadow-sm mt-4 w-100">Send</button>

        </form>


        <div class="container w-100 text-center">

            <?php foreach ($text as $one) : ?>
                <?php echo $one; ?>
            <?php endforeach ?>

        </div>


    </div>
</body>

</html>