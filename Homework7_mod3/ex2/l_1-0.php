<?php
print "I've gone to the store.";
print "The sauce cost \$10.25.";
$cost = '$10.25';
print "The sauce cost $cost.";
print "The sauce cost \$\061\060.\x32\x35.";

// демонстрація виводу рядка із використанням функціх print 
// рядок зоноситься в подвійні кавички 
// знак "\" використовується для виконання службових комбінацій
// наприклад \$ виводить рядок із знаком долара
// в іншому випадку наступний текст буду сприйматися як змінна(інтерполяція), але за умови якщо як мінімум не має пробіла
// в останьому рядку інформація конвертується ASCII, тобто код \061  - це восьмиричний код який конвертується в ASCII
// із преставкою "x" код конвертується із формата hex

print <<< EOF
It's funny when signs say things like:
    Original "Root" Beer
    "Free" Gift
    Shoes cleaned while "you" wait
    or have other misquoted words.
EOF;

print <<< PARSLEY
It's easy to grow fresh:
Parsley
Chives
on your windowsill
PARSLEY;
// heredoc підтримує інтерполяцію і виконнання службових функції
// не потрубує екранування символу подвійної кавички
// маркер END демонструє де починається і закінчується рядок
$url = "https://css-tricks.com/snippets/css/a-guide-to-flexbox/";

print <<< HTML
<a href="$url">dsf</a>
HTML;

// heredoc досить добре використовувати при форматованому виведенні html


$listItem = "listItem";
$html = <<< END
<div>
<ul>
<li>
END
    . $listItem . '</li></div>';
print $html;
// використання контатинації рядків із heredoc

$js = <<<'__JS__'
$.ajax({
'url': '/api/getStock',
'data': {
    'ticker': 'LNKD'
},
'success': function( data ) {
$( "#stock-price" ).html( "<strong>$" + data + "</strong>" );
}
});
__JS__;
print $js;
//  nowdoc зображений вище на відмінну від heredoc не виконує інтерполяцію рядків
// можна використати в js
