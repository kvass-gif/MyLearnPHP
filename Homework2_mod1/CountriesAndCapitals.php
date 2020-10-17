<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $countries = array(
        "Italy" => "Rome", "Luxembourg" => "Luxembourg",
        "Belgium" => "Brussels", "Denmark" => "Copenhagen",
        "Finland" => "Helsinki", "France" => "Paris",
        "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" =>
        "Berlin", "Greece" => "Athens", "Ireland" => "Dublin",
        "Netherlands" => "Amsterdam", "Portugal" => "Lisbon",
        "Spain" => "Madrid", "Sweden" => "Stockholm",
        "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius",
        "Czech Republic" => "Prague", "Estonia" => "Tallinn",
        "Hungary" => "Budapest", "Latvia" => "Riga", "Malta" => "Valletta",
        "Austria" => "Vienna", "Poland" => "Warsaw"
    );
    asort($countries);

    foreach ($countries as $key => $value) {
        $str = strstr($value, $value[1]);
        echo "The capital of $key is <b>$value[0]</b>$str<br>";
    }



    ?>
</body>

</html>