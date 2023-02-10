<?php

include_once 'database/Database.php';
include_once 'database/DatabaseRepository.php';

class GenerateReportService {

  private $table;
  private $class;
  
  public function __construct($table, $class){
    $this->table = $table;
    $this->class = $class;
  }

  public  function execute(){
    header("Content-Type: application/xls");
    header("Content-Disposition: attachment; filename=$this->table.xls");
    header("Pragma: no-cache");
    header("Expires: 0");

    $database = new Database($this->table);
    $repository = new DatabaseRepository($database);

    $result = $repository->select();

    $result = $result->fetchAll(PDO::FETCH_CLASS, $this->class);

    echo implode("\t", array_keys(get_object_vars($result[0]))) . "\r\n";

    foreach ($result as $row) {
      echo implode("\t", array_values(get_object_vars($row))) . "\r\n";
    }

    exit;
  }
}