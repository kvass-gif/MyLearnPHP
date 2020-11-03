<?php
//зливання двох масивів при тому елементи останнього масиву додаються в кінець першого
$p_languages = array('Perl', 'PHP');
$p_languages = array_merge($p_languages, array('Python'));
print_r($p_languages);
echo "<br>";

// в такому випадку до існуючого масива додасться новий масив із своїм ключом, це не є зливання масивів а скоріше вложення 
// одного масиву в інший
$p_languages = array('Perl', 'PHP');
array_push($p_languages, array('Python'));
print_r($p_languages);
echo "<br>";

// зливання масивів із елементами що мають рядкові ключі відбувається на користь останього масиву, 
// а а числові ключі обєднуться по значенню ключа 
// при роботі із рядковими ключами можлива втрата інформації
$lc = array('a', 'b' => 'b');
$uc = array('A', 'b' => 'B');
$ac = array_merge($lc, $uc);
print_r($lc);
print_r($uc);
print_r($ac);
echo "<br>";


// зливання при операторі + може відбуватися по іншому,
// значення із однаковими ключами відбувається зливання на користь ліваго операнда 
// це стосується числових і рядкових ключів
echo "uc";
print_r($uc);
echo "lc";
print_r($lc);
echo "<br>";
echo "uc + lc";
print_r($uc + $lc);
echo "lc + uc";
print_r($lc + $uc);
echo "<br>";
