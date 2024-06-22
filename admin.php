<?php
require_once 'connection.php';

try {
    $stmt = $conn->query("SELECT * FROM users");
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    error_log("Fout bij het ophalen van gebruikers: " . $e->getMessage());
    die("Er is een fout opgetreden. Probeer het later opnieuw.");
}
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Admin Panel</title>
</head>

<body class="admin-pagina">
    <section class="admin-user-info">
        <h2>Gebruikers:</h2>
        <?php if (!empty($users)) : ?>
            <table class="user-table">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Username</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td><?= $user['user_id']; ?></td>
                            <td><?= $user['first_name']; ?></td>
                            <td><?= $user['last_name']; ?></td>
                            <td><?= $user['username']; ?></td>
                            <td><?= $user['email']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else : ?>
            <p>Geen gebruikers gevonden.</p>
        <?php endif; ?>
    </section>
    <section class="admin-travel-config">
        <h2>Aanpassen reizen:</h2>
        <form action="process_travel.php" method="post">
            <input type="hidden" id="action" name="action" value="insert">

            <div class="admin-form-change">
                <label for="stay_id">Stay ID:</label>
                <input type="text" id="stay_id" name="stay_id" required>
            </div>

            <div class="admin-form-change">
                <label for="to_city">To City:</label>
                <input type="text" id="to_city" name="to_city" required>
            </div>

            <div class="admin-form-change">
                <label for="from_city">From City:</label>
                <input type="text" id="from_city" name="from_city" required>
            </div>

            <div class="admin-form-change">
                <label for="to_country">To Country:</label>
                <input type="text" id="to_country" name="to_country" required>
            </div>

            <div class="admin-form-change">
                <label for="from_country">From Country:</label>
                <input type="text" id="from_country" name="from_country" required>
            </div>

            <div class="admin-form-change">
                <label for="cost">Cost:</label>
                <input type="text" id="cost" name="cost" required>
            </div>

            <div class="admin-form-change">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
            </div>

            <div class="admin-form-change">
                <label for="travel_time">Travel Time:</label>
                <input type="text" id="travel_time" name="travel_time" required>
            </div>

            <div class="admin-form-change">
                <label for="image_url">Image URL:</label>
                <input type="text" id="image_url" name="image_url" required>
            </div>

            <div class="admin-form-change">
                <input type="submit" name="submit" value="Insert">
                <input type="reset" value="Clear">
            </div>
        </form>
    </section>

</body>

</html>