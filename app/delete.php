<?php

include_once __DIR__ . '/models/Automobile.php';

if(!isset($_GET['id']) || !is_numeric($_GET['id'])){
  header('location: index.php?status=error');
  exit;
}

$automobile = Automobile::find($_GET['id']);

if(!$automobile instanceof Automobile){
  header('location: index.php?status=error');
  exit;
}

if(isset($_POST['delete_confirm'])){
  $automobile->delete();
  header('location: /index.php?status=success');
  exit;
}

include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/delete-confirm.php';
include __DIR__ . '/includes/footer.php';
