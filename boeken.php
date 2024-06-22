<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<header><?php include ('connection.php');
include ('header.php');  ?></header>
<main id="ticketpagina" style="background-image: url('assets/img/image8.png'); background-size: auto;">

<body>
    <!-- <div class="ticket">
            <?php
            include("gettravels.php");
                if(!empty($result)){

                    $first_travel = $result[6];

                    echo '<img src=' . $first_travel['image_url'] . '>';
                    echo '<h2>' . $first_travel['to_city'],", ",  $first_travel['to_country']. '</h2>';
                    echo '<p>' . "Departure: TBA" . '<p>';
                    echo '<p>' . $first_travel['date'] . '</p>';
                    echo '<p>' . $first_travel['travel_time'] . '</p>';
                    echo '<p>' . "Retour ticket" . '<p>';
                    echo '<h2>' ."vanaf €", $first_travel['cost'] . '</h2>';
                }
                else{
                    echo 'No Travel';
                }
    ?>
    </div> -->
<div class="tickets-container">
    <?php
    include("gettravels.php");

    if (!empty($result)) {
        foreach ($result as $travel) {
            ?>
            <div class="ticket">
                <img src="<?php echo ($travel['image_url']); ?>" alt="<?php echo ($travel['to_city'] . ', ' . $travel['to_country']); ?>">
                <h2><?php echo ($travel['to_city'] . ', ' . $travel['to_country']); ?></h2>
                <p>Departure: TBA</p>
                <p><?php echo $travel['date']; ?></p>
                <p><?php echo $travel['travel_time']; ?></p>
                <p>Retour ticket</p>
                <h2>vanaf €<?php echo $travel['cost']; ?></h2>
            </div>
            <?php
        }
    } else {
        echo 'No Travel';
    }
    ?>
<!-- </div>
    <div class="ticket">
        <img src="assets/img/image9.png" alt="Verona">
        <h2>Verona, Italië</h2>
        <p>Vertrek: 10:00</p>
        <p>17-05-2024</p>
        <p>1 u 40 min</p>
        <p>retour ticket</p>
        <p class="price">vanaf €300</p>
    </div> -->
</body>

</main>
<footer><?php include('footer.php');?></footer>
</html>