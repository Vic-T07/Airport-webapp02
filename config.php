<?php
// Database configuratie
$dbHost = 'localhost';
$dbName = 'webapp02';
$dbUser = 'username';
$dbPass = 'password';

// PDO verbinding maken
try {
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    error_log("Database connectie mislukt: " . $e->getMessage());
    die("Er is een fout opgetreden. Probeer het later opnieuw.");
}
?>
