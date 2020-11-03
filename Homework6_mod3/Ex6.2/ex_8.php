<?php

$names = array(
    'firstname' => "Baba",
    'lastname' => "O'Riley"
);
array_walk($names, function (&$value, $key) {
    $value = htmlentities($value, ENT_QUOTES);
});
foreach ($names as $name) {
    print "$name\n";
}
print_r($names);

$names = array(
    'firstnames' => array("Baba", "Bill"),
    'lastnames' => array("O'Riley", "O'Reilly")
);
array_walk_recursive($names, function (&$value, $key) {
    $value = htmlentities($value, ENT_QUOTES);
});
foreach ($names as $nametypes) {
    foreach ($nametypes as $name) {
        print "$name\n";
    }
}
