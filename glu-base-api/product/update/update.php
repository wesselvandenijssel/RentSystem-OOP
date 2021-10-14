<?php
require_once "../../config/config.php";
if(isset($_POST['update'])){
    $id = $_GET["update"];
    $category_id = $_POST['category_id'];
    $naam= $_POST['naam'];
    $beschrijving = $_POST['beschrijving'];
    $toegevoegd_op = $_POST['toegevoegd_op'];
    $gewijzigd_op = $_POST['gewijzigd_op'];

    $sql = "UPDATE `product` SET `category_id`= '$category_id',`naam`='$naam',`beschrijving`='$beschrijving',
    `toegevoegd_op`='$toegevoegd_op',`gewijzigd_op`='$gewijzigd_op' WHERE `id` = '$id'";
    // echo $sql;
    // echo $id;
    // echo $title;
    $result = mysqli_query($con, $sql);
    if($result){
        echo '<script type="text/javascript"> alert("Data Update")</script>';
        header ("refresh:1;url=../index.php");
        echo "Redirecting.....";

    }
    else{
        echo '<script type="text/javascript"> alert("Data NOT Update")</script>';
    }
}
?>