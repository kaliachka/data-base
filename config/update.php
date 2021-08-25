<?php
    require_once 'connect.php';

    $participant_id = $_GET['id'];
    $participant = mysqli_query($conn, "SELECT * FROM `participants` WHERE `id` = '$participant_id'");
    $participant = mysqli_fetch_assoc($participant);
    //print_r($participant);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<div class="adding">
<h3> Update user</h3>
<form action="../vendor/updateUsers.php" method="post">
    <p>First Name</p>
    <input type="text" name="firstName" value="<?= $participant['firstName']?>">
    <p>Last Name</p>
    <input type="text" name="lastName" value="<?= $participant['lastName']?>">
    <p>email</p>
    <input  type="email" name="email" value="<?= $participant['email']?>">
    
    <p>position</p>
  <select name="position">
      
    <option value="vice president">vice president</option>
    <option value="president">president</option>
    <option value="manager">manager</option>
    <option value="novice" >novice</option>
    <!-- value="<?= $participant['position']?>" -->
  </select>
    <p>shares amount</p>
    <input  type="number" name="shares" value="<?= $participant['sharesAmount']?>">
    <p>Start Date (format: 2009-11-03 11:24:00)</p>
    <input type="data" name="data" value="<?= $participant['startDate']?>"><br> <br>
    <button type="submit">Update user</button> 
</form>
</div>
</body>
</html>