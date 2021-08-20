<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercise</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css"/>
</head>
<body>
<?php
require_once 'connect.php';
require_once '../vendor/create.php';
// require_once '../conditions/position.php';
?>
  <table>
        <tr>
            <th>ID</th>
            <th>firstName</th>
            <th>lastName</th>
            <th>email</th>
            <th>position</th>
            <th>sharesAmount</th>
            <th>startDate</th>
            <th>parentid</th>
        </tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM `participants`");
while ($res = mysqli_fetch_assoc($result)) {
    ?>
        <tr>
            <td><?= $res['id'] ?></td>
            <td><?= $res['firstName'] ?></td>
            <td><?= $res['lastName'] ?></td>
            <td><?= $res['email'] ?></td>
            <td><?= $res['position'] ?></td>
            <td><?= $res['sharesAmount'] ?></td>
            <td><?= $res['startDate'] ?></td>
            <td><?= $res['parentId'] ?></td>
        </tr>
    </table>
<?php
}
?>

<?php
//    $participants = mysqli_query($conn, query("SELECT * FROM participants WHERE 1"));
//    $participants = mysqli_fetch_all($participants);
//    print_r($participants);
?>
<div class="adding">
<h3>Add new user</h3>
<form action="../vendor/createUsersForm.php" method="post">
    <p>First Name</p>
    <input type="text" name="firstName">
    <p>Last Name</p>
    <input type="text" name="lastName">
    <p>email</p>
    <input  type="email" name="email">
    
    <p>position</p>
  <select name="position">
    <option value="president">president</option>
    <option value="vice president">vice president</option>
    <option value="manager">manager</option>
    <option value="novice" selected>novice</option>
  </select>
    <p>shares amount</p>
    <input  type="number" name="shares">
    <p>Start Date (format: 2009-11-03 11:24:00)</p>
    <input type="data" name="data"><br> <br>
    <button type="submit">Add new user</button> 
</div>
</body>
</html>
