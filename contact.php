<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>VFE Airways Contact</title>
</head>

<body>
<!-- <?php include('connection.php') ?> -->
<?php include ('header.php'); ?>
<main style="background-image: url('assets/img/background-image-contact.png'); background-size: cover;">

<div class="contact-form-">
    <div class="contact-form">
        <form action="#" method="get">
            <h2>Contact</h2>
            <input type="text" id="contact-naam" placeholder="Naam " required>
            <input type="e-mail" id="contact-mail" placeholder="E-mail" required>
            <input type="text" id="contact-bericht" placeholder="Bericht" required>
            <button type="submit" class="contact-button">Verzenden</button>
        </form>
    </div>
</div>
<div id="tussen"></div>
</main>
    
<?php include('footer.php'); ?>
</body>

</html>