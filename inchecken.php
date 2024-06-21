<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>VFE Airways Online Inchecken</title>
</head>

<body>
<!-- <?php include('connection.php') ?> -->
<?php include ('header.php'); ?>
<main style="background-image: url('assets/img/background-image-inchecken.png'); background-size: cover;">

<div class="inchecken-form-">
    <div class="inchecken-form">
        <form action="#" method="get">
            <h2>Inchecken</h2>
            <input type="text" id="inchecken-Vnaam" placeholder=" Voornaam " required>
            <input type="text" id="inchecken-Anaam" placeholder=" Achternaam" required> 
            <input type="text" id="inchecken-vertrek" placeholder=" Vertrek datum" required>
            <input type="text" id="inchecken-bestemming" placeholder=" Bestemming" required>
            <button type="submit" class="inchecken-button">Inchecken</button>
        </form>
    </div>
</div>
<div id="tussen"></div>
</main>
    
<?php include('footer.php'); ?>
</body>

</html>