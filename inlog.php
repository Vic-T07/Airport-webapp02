<?php
session_start();

include ('Connection.php'); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $stmt = $conn->prepare("SELECT * FROM users WHERE email=:email AND password=:password");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $user['username'];
        $_SESSION['first_name'] = $data['first_name'];
        $_SESSION['email'] = $user['email'];

        if ($user['admin'] == 1) {
            $_SESSION['admin'] = true; 
            header("Location: admin.php"); 
            exit();
        } else {
            header("Location: boeken.php");
        }
    } else {
        echo "Email of wachtwoord is onjuist ingevoerd"; 
    }
} else {
}

