<?php
class LogFile
{
    protected $filename;
    protected $handle;
    public function __construct($filename)
    {
        $this->filename = $filename;
        $this->open();
    }
    private function open()
    {
        $this->handle = fopen($this->filename, 'a');
    }
    public function __destruct($filename)
    {
        fclose($this->handle);
    }
    // Вызывается при сериализации объекта.
    // Метод должен возвращать массив сериализуемых свойств объекта.
    public function __sleep()
    {
        return array('filename');
    }
    // Вызывается при десериализации объекта.
    public function __wakeUp()
    {
        $this->open();
    }
}
// серіалізація об'єкта в цьому випадку дозволяє не повністю завантажувати в файл весь об'єкт
// а лише серіалізовані поля, наприклад назву файла
// серіалізація допомагає зберігати стан об'єкта, який при десеріалізації відновлюється