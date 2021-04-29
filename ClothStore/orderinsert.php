<?php

include("db.php");


$pname = $_POST['pname'];
$pid = $_POST['id'];
$psize = $_POST['size'];
$cemail = $_POST['email'];
$ccontact = $_POST['contact'];

$query = "INSERT INTO `insertform` (`pname`, `pid`, `psize`, `cemail`, `ccontact`) VALUES 

('$pname', '$pid', '$psize ', '$cemail', '$ccontact')";

mysqli_query($conn,$query);

header("Location:http://localhost/ClothStore/orderform.php");

?>