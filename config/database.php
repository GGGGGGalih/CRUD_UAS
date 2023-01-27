<?php
class Database
{
    private $host = "127.0.0.1";
    private $dbname = "perpus";
    private $username = "root";
    private $password = "";
    public $conn;

    public function connection()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Connection error : " . $exception->getMessage();
        }
        return $this->conn;
    }
}