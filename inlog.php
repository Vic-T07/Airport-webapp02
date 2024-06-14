<?php

include ('Connection.php');

$stmt = $conn->prepare("SELECT * FROM users WHERE gebruikersnaam=:gebruikersnaam AND wachtwoord=:wachtwoord");
$stmt->bindParam(':gebruikersnaam', $_POST['uname']);
$stmt->bindParam(':wachtwoord', $_POST['psw']);

$result = $stmt->execute();

$data = $stmt->fetch();

if ($result) {
   session_start();
    $_SESSION['users'] = $data['gebruikersnaam'];
    $_SESSION['rol'] = $data['rol'];

} else {
    echo 'niet';
}
if ($result) {
    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = $data['username'];
    
    if ($data['admin'] == 1) {
        $_SESSION['admin'] = 'admin';
        header("Location: service.php");
    } else {
      
    }
    exit();
} else {

    echo "Ongeldige gebruikersnaam of wachtwoord.";
}