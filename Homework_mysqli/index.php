<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $server = "localhost";
            $user = "root";
            $pass = "";
            $db = "post_db";

            $link = mysqli_connect($server, $user, $pass, $db);
            if (!$link) {
                echo "Error: Unable to connect to MySQL." . PHP_EOL;
                echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
                echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
                exit;
            }

            $sql = "SELECT * FROM `category`";

            if (!$isSuccess = mysqli_query($link, $sql))
                printf("Error: %s\n", mysqli_error($link));


            $result = mysqli_query($link, $sql);

            while ($row = mysqli_fetch_array($result)) {
                $id = $row['id'];
                $name = $row['name'];
                echo "<tr>
                <th scope='row'>$id</th>
                <td>$name</td>
            </tr>";
            }
            mysqli_close($link);


            ?>
        </tbody>
    </table>

</body>

</html>