<?php

namespace CRUD\Helper;

class DBConnector
{
private $server;
private $username;
private $password;
    /** @var mixed $db */
    private $db;

    public function __construct($server,$username,$password)
    {
$this->server = $server;
$this->username = $username;
$this->password = $password;
    }

    /**
     * @throws \Exception
     * @return void
     */
    public function connect() : void
    {
$connection = mysqli_connect(mysqli_connect($this->$server,$this->$username,$this->$password));
return $connection ? $connection : null;   
   }

    /**
     * @param string $query
     * @return bool
     */
    public function execQuery(string $query) : bool
    {
        return true;
    }

    /**
     * @param string $message
     * @throws \Exception
     * @return void
     */
    private function exceptionHandler(string $message): void
    {

    }
}