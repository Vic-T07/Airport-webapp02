<?php
include("connection.php");

if (!isset($_GET['travel_id'])) {
    die("Travel ID not provided.");
}

$travel_id = $_GET['travel_id'];

$sql = "SELECT * FROM travel WHERE travel_id = :travel_id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':travel_id', $travel_id);
$stmt->execute();
$travel = $stmt->fetch();

if (!$travel) {
    die("Er is geen reis met dit id");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to_city = $_POST['to_city'];
    $from_city = $_POST['from_city'];
    $to_country = $_POST['to_country'];
    $from_country = $_POST['from_country'];
    $cost = $_POST['cost'];
    $date = $_POST['date'];
    $travel_time = $_POST['travel_time'];
    $image_url = $_POST['image_url'];

    $sql = "UPDATE travel 
            SET to_city = :to_city, 
                from_city = :from_city, 
                to_country = :to_country, 
                from_country = :from_country, 
                cost = :cost, 
                date = :date, 
                travel_time = :travel_time, 
                image_url = :image_url 
            WHERE travel_id = :travel_id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':to_city', $to_city);
    $stmt->bindParam(':from_city', $from_city);
    $stmt->bindParam(':to_country', $to_country);
    $stmt->bindParam(':from_country', $from_country);
    $stmt->bindParam(':cost', $cost);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':travel_time', $travel_time);
    $stmt->bindParam(':image_url', $image_url);
    $stmt->bindParam(':travel_id', $travel_id);
    $stmt->execute();

    header("Location: admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Update Travel</title>
</head>

<body>

    <main>
        <section class="admin-travel-config">
            <h2>Update Travel</h2>
            <form action="<?php echo ($_SERVER["PHP_SELF"]) . "?travel_id=" . $travel_id; ?>" method="post">
                <input type="hidden" id="action" name="action" value="update">

                <div class="admin-form-change">
                    <label for="to_city">To City:</label>
                    <input type="text" id="to_city" name="to_city" value="<?php echo ($travel['to_city']); ?>">
                </div>

                <div class="admin-form-change">
                    <label for="from_city">From City:</label>
                    <input type="text" id="from_city" name="from_city" value="<?php echo ($travel['from_city']); ?>">
                </div>

                <div class="admin-form-change">
                    <label for="to_country">To Country:</label>
                    <input type="text" id="to_country" name="to_country" value="<?php echo ($travel['to_country']); ?>">
                </div>

                <div class="admin-form-change">
                    <label for="from_country">From Country:</label>
                    <input type="text" id="from_country" name="from_country" value="<?php echo ($travel['from_country']); ?>">
                </div>

                <div class="admin-form-change">
                    <label for="cost">Cost:</label>
                    <input type="text" id="cost" name="cost" value="<?php echo ($travel['cost']); ?>">
                </div>

                <div class="admin-form-change">
                    <label for="date">Date:</label>
                    <input type="date" id="date" name="date" value="<?php echo ($travel['date']); ?>" required>
                </div>

                <div class="admin-form-change">
                    <label for="travel_time">Travel Time:</label>
                    <input type="text" id="travel_time" name="travel_time" value="<?php echo ($travel['travel_time']); ?>">
                </div>

                <div class="admin-form-change">
                    <label for="image_url">Image URL:</label>
                    <input type="text" id="image_url" name="image_url" value="<?php echo ($travel['image_url']); ?>">
                </div>

                <input type="submit" name="submit" value="Update">
                <a href="admin.php" class="cancel-button">Cancel</a>
            </form>
        </section>
    </main>
</body>

</html>