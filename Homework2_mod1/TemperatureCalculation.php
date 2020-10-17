<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php


    $Indexes = [
        78, 60, 62, 68, 71, 68,
        73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74,
        62, 62, 65, 64, 68, 73, 75, 79, 73
    ];
    sort($Indexes);
    $lowest = [];
    $highest = [];
    $average = 0;

    foreach ($Indexes as $Index)
        $average += $Index;
    $average /= count($Indexes);

    for ($i = 0; 7 > $i; $i++)
        $lowest[] = $Indexes[$i];
    for ($i = count($Indexes) - 7; count($Indexes) > $i; $i++)
        $highest[] = $Indexes[$i];

    $average = round($average, 1);
    echo "Average Temperature is : $average";
    echo "<br>List of seven lowest temperatures : ";
    foreach ($lowest as $val) echo "$val, ";
    echo "<br>List of seven highest temperatures : ";
    foreach ($highest as $val) echo "$val, ";



    ?>
</body>

</html>