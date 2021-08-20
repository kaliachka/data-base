<?php
$servername = "localhost";
$username = "пользователь";
$password = "пароль";
$dBName = "exercise";

$conn = new mysqli($servername, $username, $password, $dBName);
if ($conn->connect_error) {
    die("connection failed: " .$conn->connect_error);
}
echo "Connection successfully";
?>
