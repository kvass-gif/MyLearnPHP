<?php

abstract class Database
{
    abstract public function connect($server, $username, $password, $database);
    abstract public function query($sql);
    abstract public function fetch();
    abstract public function close();
}

// абстрактний клас має мати хочаб один абстрактний метод
// не може бути створено об'єкта від абстрактного класа
// він орієнтовани на наслідування
// методи і поля абстрактого класу не можуть бути private, оскільки вони повинні наслідуватися
// не можуть бути final, оскільки повинні перевантажуватися
class MySQL extends Database
{
    protected $dbh;
    protected $query;
    public function connect($server, $username, $password, $database)
    {
        $this->dbh = mysqli_connect(
            $server,
            $username,
            $password,
            $database
        );
    }
    public function query($sql)
    {
        $this->query = mysqli_query($this->dbh, $sql);
    }
    public function fetch()
    {
        return mysqli_fetch_row($this->dbh, $this->query);
    }
    public function close()
    {
        mysqli_close($this->dbh);
    }
}
// методи класу що наслідує абстрактний клас повинні відповідати прототипам абстрактного класу
