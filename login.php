<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
    
  
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
       
</head>
<body>
    
  <style>  
   

.bg{
  /* The image used */
  background-image: url("images/bike.jpg");

  /* Full height */
  height: 1000px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
  

</style>


 <div class ="bg">
     
 
<div class="header">
		<h2>Login</h2>	

   </div>          
   <form method="post" action="login.php">

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
                        <input type="password" name="password">
		</div>
		<div class="input-group">
                    <button type="submit" class= "btn" value="Login" name="login_user">Login</button>

    

                <p>
                    <a href="home.php">Home</a>
		</p>
                <p>
                    <a href="registration.php">SignUp</a>
		</p>
                <p>
                    
                <a href="passwordreset.php">Reset Your Password</a>
                </p>
                
                <p>
                <a href="logout.php" >Log Out </a>
                
                </p>
                <div class="container" style="background-color:#f1f1f1">
                    
                </div>
             
               </div> 
       
   </form>
       </div>
   


     

</body>
</html>



