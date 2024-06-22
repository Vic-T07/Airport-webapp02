<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<header><?php
        session_start();
        include('connection.php');
        include('header.php');

        if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
            header("Location: inlog.php");
            exit();}
        ?>
</header>
<main id="ticketpagina" style="background-image: url('assets/img/image8.png'); background-size: cover;">

    <body>
        <div class="tickets-container">
            <?php
            include("gettravels.php");

            if (!empty($result)) {
                foreach ($result as $travel) {
            ?>
                    <div class="ticket">
                        <img src="<?php echo ($travel['image_url']); ?>" alt="er is geen foto beschikbaar">
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
    </body>

</main>
<footer><?php include('footer.php'); ?></footer>

</html>