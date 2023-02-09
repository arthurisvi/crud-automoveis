<?php

include_once __DIR__ . '/models/Automobile.php';

$data = [
  'descricao' => $_POST['descricao'],
  'placa' => $_POST['placa'],
  'ano_modelo' => $_POST['ano_modelo'],
  'ano_fabricacao' => $_POST['ano_fabricacao'],
  'cor' => $_POST['cor'],
  'km' => $_POST['km'],
  'marca' => $_POST['marca'],
  'preco' => $_POST['preco'],
  'preco_fipe' => $_POST['preco_fipe']
];

$automobile = new Automobile;

if (count(array_filter($data)) === count($data)) {
    $automobile->descricao = $data['descricao'];
    $automobile->placa = $data['placa'];
    $automobile->ano_modelo = $data['ano_modelo'];
    $automobile->ano_fabricacao = $data['ano_fabricacao'];
    $automobile->cor = $data['cor'];
    $automobile->km = $data['km'];
    $automobile->marca = $data['marca'];
    $automobile->preco = $data['preco'];
    $automobile->preco_fipe = $data['preco_fipe'];
    $automobile->create();

    header('location: /index.php?status=success');
    exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/form.php';
include __DIR__ . '/includes/footer.php';
