<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercise</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css"/>
</head>
<body>
<?php
//phpinfo();
require_once 'connect.php';
require_once '../vendor/create.php';
require_once 'form.php';
error_reporting(-1);
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
// $result = mysqli_query($conn, "SELECT * FROM `participants`");
// while ($res = mysqli_fetch_assoc($result)) {
    class firsMember {}
    const ARR = array('1', 'Mike', 'Patterson', 'mike_pat@example.org', 'head', '1000', '1273438800', '0');
    ?>
        <tr>
            <td><?= ARR[0] ?></td>
            <td><?= ARR[1] ?></td>
            <td><?= ARR[2] ?></td>
            <td><?= ARR[3] ?></td>
            <td><?= ARR[4] ?></td>
            <td><?= ARR[5] ?></td>
            <td><?= ARR[6] ?></td>
            <td><?= ARR[7] ?></td>
            <td><a href = "update.php?id=><?= ARR[0]?>">Update</a></td>
        </tr>
    </table>
<?php 
 mysqli_query($conn, query("INSERT INTO `participants` (`id`, `firstName`, `lastName`, `email`, `position`, `sharesAmount`, `startDate`, `parentId`) VALUES (ARR[0], ARR[1], ARR[2], ARR[3], ARR[4], ARR[5], ARR[6], ARR[7])"));
//}
?>


</body>
</html>
