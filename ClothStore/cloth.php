<?php
include("db.php");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['pname'];
$id = $_POST['id'];
$size = $_POST['size'];

$picture = $_FILES['picture']['name'];
$tmpname = $_FILES['picture']['tmp_name'];
$folder = "uploadImage/";

move_uploaded_file($tmpname, $folder.$picture);

$query = "INSERT INTO `clotharrival` (`pname`, `pid`, `psize`, `picture`) VALUES ('$name', '$id', '$size', '$picture')";


if ($conn->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
header("location:http://localhost/ClothStore/insertcloth.php");
?>