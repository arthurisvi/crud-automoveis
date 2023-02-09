<?php

include_once 'database/Database.php';
include_once 'database/DatabaseRepository.php';

class Automobile {

  public $id;
  public $descricao;
  public $placa;
  public $ano_modelo;
  public $ano_fabricacao;
  public $cor;
  public $km;
  public $marca;
  public $preco;
  public $preco_fipe;

  public function create(){

    $database = new Database('automoveis');
    $repository = new DatabaseRepository($database);
    $this->id = $repository->insert([
      'descricao' => $this->descricao,
      'placa' => $this->placa,
      'ano_modelo' => $this->ano_modelo,
      'ano_fabricacao' => $this->ano_fabricacao,
      'cor' => $this->cor,
      'km' => $this->km,
      'marca' => $this->marca,
      'preco' => $this->preco,
      'preco_fipe' => $this->preco_fipe
    ]);

    return true;
  }

  public function merge(){
    $database = new Database('automoveis');
    $repository = new DatabaseRepository($database);
    
    $repository->update('id = ' . $this->id, [
      'descricao' => $this->descricao,
      'placa' => $this->placa,
      'ano_modelo' => $this->ano_modelo,
      'ano_fabricacao' => $this->ano_fabricacao,
      'cor' => $this->cor,
      'km' => $this->km,
      'marca' => $this->marca,
      'preco' => $this->preco,
      'preco_fipe' => $this->preco_fipe
    ]);

    return true;
  }

  public static function all($where = null, $order = null, $limit = null, $offset = null){
    $repository = new DatabaseRepository((new Database('automoveis')));
    $result = $repository->select($where, $order, $limit, $offset);

    return $result->fetchAll(PDO::FETCH_CLASS, self::class);
  }

  public static function find($id){
    $repository = new DatabaseRepository((new Database('automoveis')));
    $result = $repository->select('id = ' . $id);

    return $result->fetchObject(self::class);
  }

  public function delete(){
    $repository = new DatabaseRepository((new Database('automoveis')));
    $repository->delete('id = ' . $this->id);

    return true;
  }

}