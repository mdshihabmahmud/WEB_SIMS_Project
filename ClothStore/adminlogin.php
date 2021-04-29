<?php session_start(); ?>

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
<body style="background-image: url(img/dashboard.jpg);">
     <div id="navtop">
     <div id="topnavbar">
      <ul>
        <li><a href="home.php">Home</a></li>
       </ul>
     </div>
  </div>
<center>
  <form action="login.php" method="POST" style="margin-top: 150px;">
    <h1 style="font-weight: bold;"><i>Admin Dashboard</i></h1><br><br>
  <label style="color: #8E44AD;"><b>Username:</b> </label>
  <input style="height: 20px; width: 250px;" type="text" name="userid" placeholder="Username" required><br><br>
   <label style="color: #8E44AD;"><b>Password:</b> </label>
  <input  style="height: 20px; width: 250px;" type="password" name="password" placeholder="Password" required><br><br>
  <input  style="height: 25px; width: 100px; background-color: powderblue" type="submit" name="submit" value="Log In">
</form><br>

<?php if(isset($_SESSION['id'])) 

    echo "<p>Incorrect, Please Input Right one.</p>";

    session_destroy();

?>

</center>


<h1 style="text-align: center; font-size: 30px; margin-top: 201px; background-color: #5D6D7E; width: 100%;">&copy;<i>All Rights Reserved By Team</i> <a style="text-decoration: none;" href=""><i>Trio.</i></a></h1>


</body>
</html>

