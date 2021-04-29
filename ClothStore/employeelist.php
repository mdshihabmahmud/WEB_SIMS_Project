<?php
include("db.php");

$name = $_POST['sname'];
$id = $_POST['id'];
$email = $_POST['email'];
$contact = $_POST['contact'];

$query = "INSERT INTO `employee` (`sname`, `id`, `email`, `contact`) VALUES ('$name', '$id', '$email', '$contact')";

mysqli_query($conn,$query);

header("Location:http://localhost/ClothStore/employee.php");

?>