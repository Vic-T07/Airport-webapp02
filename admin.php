<?php
require_once 'config.php'; // Ensure this file has correct database connection details

// Voorbeeldquery: Gebruikers uit 'users' tabel ophalen
try {
    $stmt = $pdo->query("SELECT * FROM users");
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    error_log("Fout bij het ophalen van gebruikers: " . $e->getMessage());
    die("Er is een fout opgetreden. Probeer het later opnieuw.");
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <h2>Gebruikers:</h2>
    <?php if (!empty($users)) : ?>
        <ul>
            <?php foreach ($users as $user) : ?>
                <li><?= htmlspecialchars($user['username']) . ' - ' . htmlspecialchars($user['email']); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
        <p>Geen gebruikers gevonden.</p>
    <?php endif; ?>
</body>
</html>