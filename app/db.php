<?php
$host = "db";
$username = "root";
$password = "dev1234";
$db = "bd-automoveis";
try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected";
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>

