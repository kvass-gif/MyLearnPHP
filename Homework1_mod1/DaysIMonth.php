<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="DaysIMonth.php" method="post">
        <input type="number" name="year" id="year" step="1" value=<?= empty($_POST['year']) ? getdate()["year"] : $_POST['year'] ?>>
        <select name="month" id="month" class="form-control">

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
        <button type="submit" name="submit" value="submit">Calc</button>
        <br>
        <?php

        function isLeapYear($year)
        {
            return fmod($year, 4) == 0;
        }

        function DaysInMonth($year, $month)
        {
            $month--;
            $daysInMonth = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
            $days = $daysInMonth[$month];
            return ((isLeapYear($year) && $month == 1) ? ($days + 1) : $days);
        }
        function GetNameMonth($numMonth)
        {
            $monthNames = [
                "January", "February", "March",
                "April", "May", "June",
                "July", "August", "September",
                "October", "November", "Decembere",
            ];
            $numMonth--;
            return $monthNames[$numMonth];
        }
        if (!empty($_POST['year'])) {

            if ((int)$_POST['year'] < 1900)
                echo "Error: The Year must be at least 1900";
            else if ((int)$_POST['year'] > 2100)
                echo "Error: Max value of the year can't be more then 2100";
            else {
                echo "Results: <br>";
                echo  $_POST['year'] .
                    " is " .
                    (isLeapYear($_POST['year']) ? "leap" : "not a leap") .
                    " year<br>";
                echo "Days in " .
                    GetNameMonth((int)$_POST['month']) .
                    " " .
                    strval(DaysInMonth((int)$_POST['year'], (int)$_POST['month']));
            }
        }

        ?>

    </form>
</body>

</html>