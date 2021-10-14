<?php
require_once("../../config/config.php");
if (isset($_POST["update"])){
$category_id = $_POST['category_id'];
$naam= $_POST['naam'];
$beschrijving = $_POST['beschrijving'];
$toegevoegd_op = $_POST['toegevoegd_op'];
$gewijzigd_op = $_POST['gewijzigd_op'];



$sql = "INSERT INTO product (category_id, naam, beschrijving, toegevoegd_op, gewijzigd_op) VALUES ('$category_id','$naam','$beschrijving','$toegevoegd_op','$gewijzigd_op')";
$result = mysqli_query($con, $sql);
// echo " last toegevoegd " . mysqli_insert_id($conn);
if($result)
if($result){
	echo '<script type="text/javascript"> alert("Data Update")</script>';
	header ("refresh:1;url=../index.php");
	echo "Redirecting.....";

}
else
{
	echo "Error :".$sql;
}
}
?>