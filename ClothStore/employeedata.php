<?php session_start();

if (isset($_SESSION['id']) == Null)  

 header("Location: http://localhost/ClothStore/adminlogin.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cloth Store Management System</title>
  <style>
      *{
      margin:0px;
      padding: 0px;
    }
        #navtop{
          background-color: #AF601A;
          height: 50px;
        }
        #navtop #topnavbar{
          margin: 0px auto;
          width: 100%;
        }
        #navtop #topnavbar ul{
          list-style-type: none;
        }
        #navtop #topnavbar ul li{
          float: left;
        }
        #navtop #topnavbar ul li a{
          text-decoration: none;
          color: black;
          background-color: ##AF601A;  
          font-size: 20px; 
          line-height: 50px;
          padding: 14px;
          transition: all linear .2s;
         }
         #navtop #topnavbar ul li a:hover{
            background-color:#D5D8DC;
            font-weight: bold;
         }
  </style>

</head>
<body style="background-color: gray;">
  <div>
     <div id="navtop">
     <div id="topnavbar">
      <ul>
        <li><a href="justadmin.php">Home</a></li>
       </ul>
     </div>
  </div>

<!-- php code -->
<?php

include("db.php");
$query = "SELECT * FROM `employee` ";
$result = mysqli_query($conn,$query);
?>
<center>
	<h1 style="margin-top: 15px;">Employee Information</h1>
	<table style="text-align: center; margin-top: 40px;" border="1" width="800px">
	<tr>
		<th>Employee Name</th>
		<th>Employee ID</th>
		<th>Employee Email</th>
		<th>Employee Contact</th>
	</tr>

<?php
 while($data=mysqli_fetch_array($result))
{
	echo "
	<tr>
		<td>$data[sname]</th>
		<td>$data[id]</td>
		<td>$data[email]</td>
		<td>$data[contact]</td>
	</tr>
	";
}
?>
</table>
</center>


<h1 style="text-align: center; font-size: 30px; margin-top: 388px;background-color: #5D6D7E; width: 100%;">&copy;<i>All Rights Reserved By Team</i> <a style="text-decoration: none;" href=""><i>Trio.</i></a></h1>

</body>
</html>



