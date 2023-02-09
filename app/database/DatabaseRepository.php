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

  public function update($where, $values){
    $fields = array_keys($values);

    $query = 'UPDATE ' . $this->database->table . ' SET ' . implode('=?,', $fields) . '=? WHERE ' . $where;

    $this->database->execute($query, array_values($values));

    return true;
  }

  public function select($where = null, $order = null, $limit = null, $offset = null, $fields = '*'){
    $where = strlen($where) ? 'WHERE ' . $where : '';
    $order = strlen($order) ? 'ORDER BY ' . $order : '';
    $limit = strlen($limit) ? 'LIMIT ' . $limit : '';
    $offset = strlen($offset) ? 'OFFSET ' . $offset : '';

    $query = 'SELECT ' . $fields . ' FROM ' . $this->database->table . ' ' . $where . ' ' . $order . ' ' . $limit . ' ' . $offset;

    return $this->database->execute($query);
  }

  public function delete($where){
    $query = 'DELETE FROM ' . $this->database->table . ' WHERE ' . $where;

    return $this->database->execute($query);
  }
}