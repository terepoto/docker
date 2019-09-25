<?php

class DB
{

    private $host;

    private $database;

    private $user;

    private $password;

    private $connect;

    public function __construct($host, $database, $user, $password)
    {
        $this->host = $host;
        $this->database = $database;
        $this->user = $user;
        $this->password = $password;
    }

    public function connection()
    {
        $this->connect = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if (! $this->connect) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return true;
    }
}
