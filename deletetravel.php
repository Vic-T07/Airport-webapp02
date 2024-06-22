<?php
include("connection.php");

if (isset($_GET['travel_id']) && !empty($_GET['travel_id'])) {
    $travel_id = filter_var($_GET['travel_id'], FILTER_SANITIZE_NUMBER_INT);

    $sql = "DELETE FROM travel WHERE travel_id = :travel_id";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':travel_id', $travel_id, PDO::PARAM_INT);

    try {
        $stmt->execute();
        header("Location: admin.php");
        exit();
    } catch (PDOException $e) {
        echo "Kan niet verwijderen. " . $e->getMessage();
    }
} else {
    header("Location: admin.php");
    exit();
}

