<?php

class Database{
  const HOST = 'db';
  const DB_NAME = 'bd-automoveis';
  const PASSWORD = "dev1234";
  const USERNAME = "root";

  public $table;
  public $connection;

  public function __construct($table = null){
    $this->table = $table;
    $this->setConnection();
  }

  private function setConnection(){
    try {
      $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::DB_NAME, self::USERNAME, self::PASSWORD);
      $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
    }
  }

  public function execute($query, $params = [])
  {
    try {
      $statement = $this->connection->prepare($query);
      $statement->execute($params);
      return $statement;
    } catch (PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
    }
  }
}