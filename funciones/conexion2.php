<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'asistencia';

try {
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
   
} catch (PDOException $e) {
    die('Conexion fallida: lo sentimos mucho.'.$e->getMessage());
}
 
?>