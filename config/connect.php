<?php

$dbValues = json_decode(file_get_contents("../db.json"));
var_dump($dbValues);
try {
   // $conn = new mysqli($dbValues["host"], $dbValues["username"], $dbValues["password"], $dbValues["dbName"]);
    $cpdo = new PDO("mysql:host=localhost;dbname=homestead", "homestead", "secret");
}
catch(Exception $e){
    echo $e->getMessage();
}
if ($conn->connect_error) {
    die("connection failed: " .$conn->connect_error);
}
echo "Connection successfully";
?>
