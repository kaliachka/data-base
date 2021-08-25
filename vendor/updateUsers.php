<?php
    require_once '../config/connect.php';
    print_r ($_POST);
    echo $firstName = $_POST['firstName'];
    echo $lastName = $_POST['lastName'];
    echo $email= $_POST['email'];
    echo $position = $_POST['position'];
    echo $sharesAmount = $_POST['shares'];
    echo $data = strtotime($_POST['data']);
mysqli_query($conn, "UPDATE `participants` SET `id` = 'id', `firstName` = 'firstName', `lastName` = 'lastName', `email` = 'email', `position` = 'position', `sharesAmount` = 'sharesAmount', `startDate` = 'data', `parentId` = 'parentId' WHERE `participants`.`id` = '$id'");

?>
    
