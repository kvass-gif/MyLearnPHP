<?php
$s = "Four score and seven years ago our fathers brought forth on this continent
a new nation, conceived in liberty and dedicated to the proposition
that all men are created equal.";
print "<pre>\n" . wordwrap($s) . "\n</pre>";
// виводить рядок де відбувається перенос на кожному 75 символі без поділу слова на частини

print wordwrap($s, 50);
// тут зазначенно довжина до переноса за промовчанням вона - 75

print wordwrap($s, 50, "\n\n");
// додатково вказується подвійний перенос рядку, може бути і інший символ який потрібно вставити
print wordwrap('jabberwocky', 5, "\n", 1);
// а також чи потрібно розрізати слово пд час переносу