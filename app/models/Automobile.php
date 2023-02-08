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

  public function save(){

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

}