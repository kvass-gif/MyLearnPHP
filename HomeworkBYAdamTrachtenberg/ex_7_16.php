<?php
function combine($a, $b)
{
    if (is_int($a) && is_int($b)) {
        return $a + $b;
    }
    if (is_float($a) && is_float($b)) {
        return $a + $b;
    }
    if (is_string($a) && is_string($b)) {
        return "$a$b";
    }
    if (is_array($a) && is_array($b)) {
        return array_merge($a, $b);
    }
    if (is_bool($a) && is_bool($b)) {
        return $a & $b;
    }
    return false;
}

class Image
{
    protected $handle;
    function ImageCreate($image)
    {
        if (is_string($image)) {
            // Простая попытка угадать тип файла
            // Получение суффикса файла
            $info = pathinfo($image);
            $extension = strtolower($info['extension']);
            switch ($extension) {
                case 'jpg':
                case 'jpeg':
                    $this->handle = ImageCreateFromJPEG($image);
                    break;
                case 'png':
                    $this->handle = ImageCreateFromPNG($image);
                    break;
                default:
                    die('Images must be JPEGs or PNGs.');
            }
        } elseif (is_resource($image)) {
            $this->handle = $image;
        } else {
            die('Variables must be strings or resources.');
        }
    }
}


// в php відсутній повноцінний поліморфім але його можна змоделювати в середені тих самих методів
// оскільки в мові передбачена динамічна типізація - це вже поліморфізм, 
// в попередніх прикладах це показано
// залежно від типів що перадються в функцію, функція буде вести себе по різному - це поліморфізм