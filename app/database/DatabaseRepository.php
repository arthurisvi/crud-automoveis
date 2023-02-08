<?php

include_once 'Database.php';

class DatabaseRepository {

  private $database;

  public function __construct(Database $db) {
    $this->database = $db;
  }

  public function insert($data){
    $fields = array_keys($data);

    $binds  = array_pad([], count($fields), '?');

    $query = 'INSERT INTO ' . $this->database->table . ' (' . implode(',', $fields) . ') VALUES (' . implode(',', $binds) . ')';

    $this->database->execute($query, array_values($data));

    return $this->database->connection->lastInsertId();
  }
}