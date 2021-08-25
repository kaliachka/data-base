<?php
require_once '../config/connect.php';
// require_once 'connect.php';
print_r ($_POST);
echo $firstName = $_POST['firstName'];
echo $lastName = $_POST['lastName'];
echo $email= $_POST['email'];
echo $position = $_POST['position'];
echo $sharesAmount = $_POST['shares'];
echo $data = strtotime($_POST['data']);
$parentId = "2";
mysqli_query($conn, "INSERT INTO `participants` (`id`, `firstName`, `lastName`, `email`, `position`, `sharesAmount`, `startDate`, `parentId`) VALUES (NULL, $firstName, $lastName, $email, $position, $sharesAmount, $data, $parentId)");

?>