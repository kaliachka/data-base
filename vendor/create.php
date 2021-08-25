<?php
    require_once '../config/connect.php';
    
    for ($i = 2; $i < 101; $i++) {
        $arrayNames = array("Ben", "Alex", "Brad", "Tina", "Lexi", "Alan", "Nico", "Jerremy");
        $name = $arrayNames[array_rand($arrayNames, 1)];

        $arrayLastNames = array("Black", "White", "Kreed", "Smith", "Thompson", "Miller", "Spenser", "Anderson");
        $surname = $arrayLastNames[array_rand($arrayLastNames, 1)];
        $email = $name . $surname . '@example.org';
        $arrayAffiliates = array(1, 2, 3, 4);
        $affilities = $arrayAffiliates[array_rand($arrayAffiliates, 1)];

        $amount = rand(0, 500);
        $parentAmount = rand(0, 100);
        // if ($parentAmount >= 1) {
        //     for ($j=$parentAmount; $j>0; $j--) {
        //         $parentID = rand(1, 100);
        //     }
        // }
        // else {
        //     continue;
        // }
        $startDate = rand (1273438801, 1627603200);
        $sql = "INSERT INTO `participants` VALUES (NULL, $name, $surname, $email, 'novice', $amount, $startDate, $parentAmount, $parentID)";
        mysqli_query($conn, $sql); 
        ?>
        <div class="creation">
            <table>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $name ?></td>
                    <td><?= $surname ?></td>
                    <td><?= $email ?></td>
                    <td><?= 'novice' ?></td>
                    <td><?= $amount ?></td>
                    <td><?= $startDate ?></td>
                    <td><?= $parentAmount ?></td>
                    <td><?= $parentID ?></td>
                </tr>
            </table>
        </div>
        <?php
                
        // echo 'NULL' . " " . $name . " " . $surname . " " . $name . $surname . '@example.org' . " " . 'novice' . " " . $amount . " " . $startDate . " " . $i;
        // echo "<br/>" . $name;
        // echo $surname;
        // echo $email;

            // if (mysqli_query($conn, $sql)) {
            //     echo "New record created successfully";
            // }
            // else {
            //     echo "Error: " . $sql . "</br>" . mysql_error($conn);
            // }
    }
    
?>
