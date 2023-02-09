<?php

include_once __DIR__ . '/models/Automobile.php';

$automobiles = Automobile::all();

if(isset($_POST['search'])){
  $automobiles = Automobile::all("UPPER(descricao) LIKE UPPER('%" . $_POST['descricao'] . "%') 
  OR UPPER(marca) LIKE UPPER('%" . $_POST['marca'] . "%')");
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/list.php';
include __DIR__ . '/includes/footer.php';

