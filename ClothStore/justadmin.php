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
        <li><a href="#">Home</a></li>
            <li><a href="insertcloth.php">New Cloth</a></li>
             <li><a href="employee.php">Employee Info</a></li>
             <li><a href="orderinfo.php">Order Info</a></li>
             <li><a href="logout.php">Logout</a></li>
       </ul>
     </div>
  </div>

<div style="text-align: center; margin-top: 150px;">
	<h1>Welcome To Admin Panel Dashboard.</h1>
</div><br><br>
<div style="text-align: center;">
  <button style="width: 180px; background-color: lightblue; height: 50px;"><a style="text-decoration: none;  color: black; font-size: 20px; font-weight: bold;" href="employeedata.php">Employee Data</a></button><br><br>
  <button style="width: 180px; height: 50px; background-color: orange; "><a style="text-decoration: none; color: black; font-size: 20px; font-weight: bold;" href="newcloth.php">New Cloths</a></button>
  
</div>


<h1 style="text-align: center; font-size: 30px; margin-top: 210px; background-color: #5D6D7E; width: 100%;">&copy;<i>All Rights Reserved By Team</i> <a style="text-decoration: none;" href=""><i>Trio.</i></a></h1>

</body>
</html>
