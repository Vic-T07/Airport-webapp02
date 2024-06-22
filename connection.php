<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'webapp02';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  error_log("Database connectie mislukt: " . $e->getMessage());
  die("Er is een fout opgetreden. Probeer het later opnieuw.");
}



