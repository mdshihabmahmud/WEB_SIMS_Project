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
<body style="background-color: orange;">
  <div>
     <div id="navtop">
     <div id="topnavbar">
      <ul>
<li><a href="justadmin.php">Home</a></li>
       </ul>
     </div>
  </div>

<center>
  <form action="employeelist.php" method="POST" style="margin-top: 70px;">
    <h1 style="color: white;">Employee Information</h1><br><br><br>
    <label style="color: white;">Name: </label>
  <input style="height: 25px; width: 170px;" type="text" name="sname" placeholder="Enter Employee Name" required><br><br>
  <label style="color: white;">Employee ID: </label>
  <input  style="height: 25px; width: 170px;" type="text" name="id" placeholder="Enter Employee ID" required><br><br>
  <label style="color: white;">Email: </label>
  <input  style="height: 25px; width: 170px;" type="email" name="email" placeholder="Enter Employee Email" required><br><br>
  <label style="color: white;">Contact: </label>
  <input  style="height: 25px; width: 170px;" type="contact" name="contact" placeholder="Enter Employee Contact" required><br><br>
  <input style="height: 25px; width: 100px; font-size: 17px; font-weight: bold;" type="submit" name="submit" value="Submit">
</form>
</center>

<h1 style="text-align: center; font-size: 30px; margin-top: 116px;background-color: #5D6D7E; width: 100%;">&copy;<i>All Rights Reserved By Team</i> <a style="text-decoration: none;" href=""><i>Trio.</i></a></h1>

</body>
</html>
