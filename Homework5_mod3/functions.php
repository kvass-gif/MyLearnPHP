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
