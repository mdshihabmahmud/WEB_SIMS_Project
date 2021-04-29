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
<body style="background-color: powderblue">
  <div>
     <div id="navtop">
     <div id="topnavbar">
      <ul>
        <li><a href="justadmin.php">Home</a></li>
       </ul>
     </div>
  </div>

<center>
  <form action="cloth.php" method="POST" style="margin-top: 70px;">
    <h1 style="color: black;">New Cloth Information</h1><br><br><br>
    <label style="color: black;">Product Name: </label>
  <input style="height: 25px; width: 170px;" type="text" name="pname" placeholder="Enter Product Name" required><br><br>
  <label style="color: black;">Product ID: </label>
  <input  style="height: 25px; width: 170px;" type="text" name="id" placeholder="Enter Product ID" required><br><br>
  <label style="color: black;">Product Size: </label>
  <input  style="height: 25px; width: 170px;" type="text" name="size" placeholder="Enter Product Size" required><br><br>
  <label style="color: black;">Product Picture: </label>
  <input  style="height: 25px; width: 170px;" type="file" name="picture"><br><br>
  <input style="height: 25px; width: 100px; font-size: 17px; font-weight: bold;" type="submit" name="submit" value="Submit">
</form>
</center>

<h1 style="text-align: center; font-size: 30px; margin-top: 181px;background-color: #5D6D7E; width: 100%;">&copy;<i>All Rights Reserved By Team</i> <a style="text-decoration: none;" href=""><i>Trio.</i></a></h1>

</body>
</html>
