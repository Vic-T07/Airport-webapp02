<?php
include("connection.php");


if (isset($_POST['stay_id'], $_POST['to_city'], $_POST['from_city'], $_POST['to_country'], $_POST['from_country'], $_POST['cost'], $_POST['date'], $_POST['travel_time'], $_POST['image_url'])) {


    $stay_id = $_POST['stay_id'];
    $to_city = $_POST['to_city'];
    $from_city = $_POST['from_city'];
    $to_country = $_POST['to_country'];
    $from_country = $_POST['from_country'];
    $cost = $_POST['cost'];
    $date = $_POST['date'];
    $travel_time = $_POST['travel_time'];
    $image_url = $_POST['image_url'];


    $sql = "INSERT INTO travel (stay_id, to_city, from_city, to_country, from_country, cost, date, travel_time, image_url) 
            VALUES (:stay_id, :to_city, :from_city, :to_country, :from_country, :cost, :date, :travel_time, :image_url)";
    $stmt = $conn->prepare($sql);


    $stmt->bindParam(':stay_id', $stay_id);
    $stmt->bindParam(':to_city', $to_city);
    $stmt->bindParam(':from_city', $from_city);
    $stmt->bindParam(':to_country', $to_country);
    $stmt->bindParam(':from_country', $from_country);
    $stmt->bindParam(':cost', $cost);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':travel_time', $travel_time);
    $stmt->bindParam(':image_url', $image_url);

    try {
        $stmt->execute();
        header("Location: admin.php");
        exit();
    } catch (PDOException $e) {
        echo "kon de reis niet toevoegen." . $e->getMessage();
    }
} else {
    header("Location: admin.php");
    exit();
}

