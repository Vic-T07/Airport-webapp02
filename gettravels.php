<?php
include("connection.php");
$sql = "SELECT * FROM travel";
$stmt = $conn-> prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
