<?php  session_start();
$_SESSION['id'] = $_POST['userid'];

include("db.php");

$user = $_POST['userid'];
$pass = $_POST['password'];
$query = "select * from adminuser where userid = '$user'";
$result = mysqli_query($conn,$query);
$admin = mysqli_fetch_array($result);


if($result)
{   
	if($admin['userid'] == $user && $admin['password'] == $pass)
           header("Location: http://localhost/ClothStore/justadmin.php");
       else
       	header("Location: http://localhost/ClothStore/adminlogin.php");
}
else
    header("Location: http://localhost/ClothStore/adminlogin.php");
?>

