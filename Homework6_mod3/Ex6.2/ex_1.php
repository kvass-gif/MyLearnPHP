<?php
//спосіб створення на ініціалізації масиву за допомогою функції array();
$fruits = array(
    'red' => array('strawberry', 'apple'),
    'yellow' => array('banana')
);

print_r($fruits);
echo "<br>";

//можливо створити масив і добавляти ключі і значення вже до створеного масиву, 
//як до існуючих ключів, так і створюючи нові ключі
$fruits1 = array();
$fruits1['red'][] = 'strawberry';
$fruits1['red'][] = 'apple';
$fruits1['yellow'][] = 'banana';

print_r($fruits1);
echo "<br>";

//в першому циклі перебераються елементи масиву $fruits із ключом $color і назвою фрукта $color_fruit
foreach ($fruits as $color => $color_fruit) {
    // оскільки кожен елемент масива також є масивом , перебераються їхні елемети в вложеному циклі
    //таким чином ми можемо вмвести кожен фрукт якого коліру, тобто колір як назва ключа
    foreach ($color_fruit as $fruit) {
        print "$fruit is colored $color.<br>";
    }
}
echo "<br>";
// функція що форматовано виводить перелік значень елементів масиву
function array_to_comma_string($array)
{

    switch (count($array)) {
        case 0:
            return '';

        case 1:
            return reset($array);

        case 2:
            return join(' and ', $array);

        default:
            $last = array_pop($array);
            return join(', ', $array) . ", and $last";
    }
}
// цекл протилежний до попереднього
//тут перебираються відразу ключі, а тоді вже виводяться елементи що входять до ключа через функцію array_to_comma_string()
foreach ($fruits as $color => $color_fruit) {
    print "$color colored fruits include " .
        array_to_comma_string($color_fruit) . "<br>";
}
