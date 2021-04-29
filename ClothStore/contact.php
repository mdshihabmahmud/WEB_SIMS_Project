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
         .input{
          height: 30px;
          width: 300px;
          background: transparent;
          outline: none;
         }
  </style>

</head>
<body style="background-color: #CCD1D1;">
  <div>
     <div id="navtop">
     <div id="topnavbar">
      <ul>
        <li><a href="home.php">Home</a></li>
          <li><a href="collection.php">Collection</a></li>
            <li><a href="orderform.php">Order Form</a></li>
             <li><a href="about.php">About us</a></li>
             <li><a href="contact.php">Contact us</a></li>
       </ul>
     </div>
  </div>

<center>
  <form style="margin-top: 60px;">
    <h1>Contact Us</h1><br>
    <h2>Need help? Our support team is here for you!</h2><br>
    <h3>Name</h3>
  <input class="input" type="text" name="name" placeholder="Enter Your Name" required><br><br>
  <h3>Email</h3>
  <input class="input" type="email" name="email" placeholder="Enter Your Email" required><br><br>
  <h3>Message</h3>
  <textarea placeholder="Write Your Message here" style="height: 100px; width: 300px; background: transparent; outline: none; "></textarea><br><br>
  <input style="height: 40px; width: 300px; background: transparent; outline: none; font-weight: bold;" type="submit" value="Send" name="submit">
</form>

</center>



<h1 style="text-align: center; font-size: 30px; margin-top: 57px;background-color: #5D6D7E; width: 100%;">&copy;<i>All Rights Reserved By Team</i> <a style="text-decoration: none;" href=""><i>Trio.</i></a></h1>

</body>
</html>
