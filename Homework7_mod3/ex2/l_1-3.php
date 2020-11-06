<?php

print substr_replace('My pet is a blue dog.', 'fish.', 12);
print substr_replace('My pet is a blue dog.', 'green', 12, 4);
$credit_card = '4111 1111 1111 1111';
print substr_replace($credit_card, 'xxxx ', 0, strlen($credit_card) - 4);

// функція яка замінює певний підрядок починаючи із позиції на заданий підрядок 
// є можливість задавати необхідну довжину , якщо довжина не заданна заміна відбувається до кінця рядку