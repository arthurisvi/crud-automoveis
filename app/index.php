<?php

include_once __DIR__ . '/models/Automobile.php';

$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;

$itemsPerPage = 2;

$paginate = $itemsPerPage * ($page - 1);

$automobiles = Automobile::all(null, null, $itemsPerPage,$paginate);

$totalItems = count(Automobile::all());

$totalPages = ceil($totalItems / $itemsPerPage);

if(isset($_POST['search'])){
  $automobiles = Automobile::all("UPPER(descricao) LIKE UPPER('%" . $_POST['descricao'] . "%') 
  OR UPPER(marca) LIKE UPPER('%" . $_POST['marca'] . "%')", null, $itemsPerPage,$paginate);
}

if(isset($_POST['generateReport'])){
  Automobile::generateReport();

}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/list.php';
include __DIR__ . '/includes/footer.php';

