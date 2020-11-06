<?php
print 'You have ' . ($_POST['boys'] + $_POST['girls']) . ' children.';
print "The word '$word' is " . strlen($word) . ' characters long.';
print 'You owe ' . $amounts['payment'] . ' immediately.';
print "My circle's diameter is " . $circle->getDiameter() . ' inches.';

// в першому випадку реалізувається оператор додавання двох рядкових змінних що конвертуються в числа і результат 
// іх виконання інтерполюється в рядое
// функції інтерполюються через контатинацію

print "I have $children children.";
print "You owe $amounts[payment] immediately.";
print "My circle's diameter is $circle->diameter inches.";
// якщо масив інтерполюється в рядок то ключ потрібно зпаисувати без подвійних кавичок
// а функцію без дужок

print "I have {$children} children.";
print "You owe {$amounts['payment']} immediately.";
print "My circle's diameter is {$circle->getDiameter()} inches.";
// для більш складних виразів використовуються фігурні дужки