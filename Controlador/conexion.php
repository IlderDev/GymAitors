<?php
$host = "sql309.infinityfree.com";
$user = "if0_37926388";
$password = "ZyOI4II3MnRL";
$dbname = "if0_37926388_aitors_gym";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error en la conexión: " . $e->getMessage());
}
?>