<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<div class="navbar">
  <a href="home.php">Home</a>
 
  <a href="contactus.php">Contact</a>
  
    <a href="reservation.php">Bike</a>
  <div class="login">Login
    <button class="dropbtn">
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="login-content">
        
        <a href="login.php"> Login</a>
        <a href="registration.php">Registration</a>
        <a href="logout.php">Logoff</a>
    </div>
  </div> 
</div>
<div class="bg" >
   
      <h1>Welcome to Bike Rental System</h1>
   <p>A Nano Site created by Lakshmi Chundi</p>

</div>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    
    
body {
  font-family: Arial, Helvetica, sans-serif;
  
  
}


.header {
  padding: 50px; /* some padding */
  text-align: center; /* center the text */
  background: #1abc9c; /* green background */
  color: Red; /* white text color */
  height: 1000px;
}

.header img {
  float: left;
  width: 1000px;
  height: 1000px;
  background: #555;
}

.header h1 {
  position: relative;
  top: 18px;
  left: 10px;
  color: red;
}
/* Increase the font size of the <h1> element */
.header h1 {
  font-size: 40px;
}


.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.login {
  float: left;
  overflow: hidden;
  color: white;
}

.login .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .login:hover .dropbtn {
  background-color: red;
}

.login-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.login-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.login-content a:hover {
  background-color: #ddd;
}

.login:hover .login-content {
  display: block;
}
.bg{
  /* The image used */
  background-image: url("images/sbike.jpg");

  /* Full height */
  height: 1000px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
  
</style>
</head>
 
</body>
</html>


