<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($username) && !empty($email) && !empty($password)) {
        try {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashed_password);

            if ($stmt->execute()) {
                header('Location: header.php');
                exit;
            } else {
                echo "Error executing SQL: " . $stmt->errorInfo()[2];
            }
        } catch (PDOException $e) {
            error_log("Error: " . $e->getMessage());
            die("An error occurred. Please try again later.");
        }
    } else {
        echo "All fields are required.";
    }
}

$conn = null;
