<?php
 require_once("../config/config.php");
 require_once("../classes/login.php");
 session_start();
$id = $_GET["buy"];
$user_name = $_SESSION['user_name'];
$sql = "SELECT id, user_name, user_email FROM `users` WHERE user_name = '$user_name'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["user_name"] . " - Email: ". $row["user_email"] . "<br>";
    }
} else {
    echo "0 results";
}
$sql2 = "INSERT INTO basket (user_id, product_id, amount) VALUES (`$row['id']`,`$id`,`1`)";
