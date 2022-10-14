<?php

namespace app\core\db;

class Database
{
  private \PDO $conn;
  private string $hostname = 'localhost';
  private string $username = 'root';
  private string $password = '';
  private string $dbName = 'mvc';

  public function __construct()
  {
    try {
      $this->conn = new \PDO("mysql:host=$this->hostname;dbname=$this->dbName", $this->username, $this->password);
      $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    } catch (\PDOException $e) {
      echo "error " . $e->getMessage();
    }
  }

  public function getConn(): \PDO
  {
    return $this->conn;
  }
}
