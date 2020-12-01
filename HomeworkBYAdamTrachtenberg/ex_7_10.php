<?php

$rasmus = clone $zeev;
// для копіювання об'єктів використовується оператор clone
class Address
{
    protected $city;
    protected $country;
    public function setCity($city)
    {
        $this->city = $city;
    }
    public function getCity()
    {
        return $this->city;
    }
    public function setCountry($country)
    {
        $this->country = $country;
    }
    public function getCountry()
    {
        return $this->country;
    }
}
class Person
{
    protected $name;
    protected $address;
    public function __construct()
    {
        $this->address = new Address;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function __call($method, $arguments)
    {
        if (method_exists($this->address, $method)) {
            return call_user_func_array(array($this->address, $method), $arguments);
        }
    }
}


// данні класи є композитними тому можуть виникати деякі незручності при їхньому копіюванні

$rasmus = new Person;
$rasmus->setName('Rasmus Lerdorf');
$rasmus->setCity('Sunnyvale');
$zeev = clone $rasmus;
$zeev->setName('Zeev Suraski');
$zeev->setCity('Tel Aviv');
print $rasmus->getName() . ' lives in ' . $rasmus->getCity() . '.';
print $zeev->getName() . ' lives in ' . $zeev->getCity() . '.';
// Rasmus Lerdorf lives in Tel Aviv.
// Zeev Suraski lives in Tel Aviv.
// при копіюванні об'єкт address копіюється по силці тому виходить два person ссилаються на один address
// запобігти цьому допомагає __clone() метод

class Person
{
    // ... То же, что прежде
    public function __clone()
    {
        $this->address = clone $this->address;
    }
}

// після чого вивід буде іншим

$rasmus = new Person;
$rasmus->setName('Rasmus Lerdorf');
$rasmus->setCity('Sunnyvale');
$zeev = clone $rasmus;
$zeev->setName('Zeev Suraski');
$zeev->setCity('Tel Aviv');

print $rasmus->getName() . ' lives in ' . $rasmus->getCity() . '.';
print $zeev->getName() . ' lives in ' . $zeev->getCity() . '.';
// Rasmus Lerdorf lives in Sunnyvale.
// Zeev Suraski lives in Tel Aviv.