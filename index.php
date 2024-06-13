<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <?php include('connection.php');
    include('header.php'); ?>
<main style="background-image: url('assets/img/background-image1.png'); background-size: cover;">
    <div class="form-container">
        <form action="" method="get">
            <label for="from">Waar wil je heen?</label>
            <input type="text" id="from" name="from" placeholder="Amsterdam, Nederland" required>
            <input type="text" id="to" name="to" placeholder="Verona, Italië" required>
            <label for="departure">Vertrek</label>
            <input type="date" id="departure" name="departure" value="" required>
            <label for="return">Terug op</label>
            <input type="date" id="return" name="return" value="" required>
            <label for="passengers">Wie gaan er mee?</label>
            <select id="passengers" name="passengers">
                <option value="1 volwassene">1 volwassene</option>
                <option value="2 volwassenen">2 volwassenen</option>
                <option value="3 volwassenen">3 volwassenen</option>
                <option value="4 volwassenen">4 volwassenen</option>
                <option value="5 volwassenen">5 volwassenen</option>
            </select>
            <button type="submit">Zoeken</button>
        </form>
    </div>
</main>
<?php include('footer.php'); ?>
</body>
</html>
