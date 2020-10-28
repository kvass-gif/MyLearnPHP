<?php

/**
 * Bootstrap the application.
 * 
 * E.g include file with variable initialization, 
 * constants and configuration.
 */
require_once __DIR__ . '/init.php';
require_once __DIR__ . '/functions.php';

$year = $_GET['year'];
$month = $_GET['month'];

if (isset($year) && isset($month)) { # $year !== NULL && $month !== NULL
    $year_leap = isLeapYear($year);

    if ($year_leap)  # $year_leap === true
        $text[] =  '<h4 class="text-success mt-4 font-weight-bold leap">Year ' . $year . ' is leap.</h4>';
    else
        $text[] = '<h4 class="text-danger mt-4 font-weight-bold leap">Year ' . $year . ' is not leap.</h4>';


    $daysInMonth = DaysInMonth($year, $month);
    $text[] = '<h5 class="text-muted mt-2 days">In ' . $month_arr[$month] . ' <b>' . $daysInMonth . '</b>' . ' days.' . '</h5>';
}
// Put control to the presentation layer
require_once VIEWS_PATH . 'form.php';
