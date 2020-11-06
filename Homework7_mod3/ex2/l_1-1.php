<?php
if (strpos($_POST['email'], '@') === false) {
    print 'There was no @ in the e-mail address!';
}

// функція strpos повертає перший індекс в рядку де була знайдений підрядок
// якщо підрядок не було знайдено повертається false тому повинно бути порівняння із врахуванням типу 

$substring = substr($string, $start, $length);
$username = substr($_GET['username'], 0, 8);
// substr повертає рядок що починається із заданої позиції із врахуванням кількості символів із вхідного рядка
print substr('watch out for that tree', 17);
// якщо не вказувати довжину функція поверне рядок від позиції до кінця рядку
print substr('watch out for that tree', 20, 5);
// якщо start виходить за межі рядку функція повертає false
// якщо в сумі start і lenght виходить за рамки рядку функція повртає рядок із заданої позиції до кінця рядку


print substr('watch out for that tree', -6);
print substr('watch out for that tree', -17, 5);
// якщо відємне значення функція починає рахунок із кінця рядку