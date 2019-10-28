<?php include('resrsql.php') ?>
   
<!DOCTYPE html>
<html>
<head>
    
  
	<title>Reservation system </title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
<style> 
    .bg{
  /* The image used */
  background-image: url("images/rbike.png");

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
            
            <h2>Booking</h2>
        </div>
    <form method="post" action="reservation.php">   
                                                                                                 
        <div class="input-group">
            
                    <label for="name" >Full name</label>
                    <input  type="text" name="Name" value="<?php echo $Name; ?>">

        </div>

        <div class="input-group">
            
                    <label for="email" >Email</label>
                    <input type="text" name="Email" value="<?php echo $Email; ?>">

        </div> 
         <div class="input-group">
                    
                    <label for="phone" >Phone</label>
                    <input type="text" name="Phone" value="<?php echo $Phone; ?>">
        </div>

        <div class="input-group">
            
        <label for="bike_id">Choose a bike</label>

                <select class="form-control" id="bike_id" name="bike"> 
                        <option value="01" >Schwinn Men's 700c</option>
                        <option value="02" >Moto Becane Jubilee  Disk</option>
                        <option value="03">Honda Mountain Bike</option>
                        <option value="04">Suzuki Road Bike</option>
                        <option value="05">Canyon Endurance Road Bike</option>
                        <option value="06">Yamaha R6 Bike</option>
                        <option value="07">Yamaha Mountain Bike</option>
                        <option value="08">Kawasaki GTR 1400</option>
                        <option value="09">Honda MSX125</option>
                        <option value="10">Suzuki DR350 MB</option>

                </select>

        </div>


        <div class="input-group">
            
            <label for="date-input">Pick up date</label>
            <input type="date" name="RentStart" value="<?php echo $RentStart; ?>">
        </div>


        <div class="input-group">
            
            <label for="time-input">Time</label>
            <input type="time" name="StartTime" value="<?php echo $StartTime; ?>">
        </div>

        <div class="input-group">
            
            <label for="date-input" >Drop off date</label>
            <input type="date" name="RentEnd" value="<?php echo $RentEnd; ?>">

        </div>
        
        
        <div class="input-group">
            
            <label for="example-time-input" >Time</label>
            <input type="time" name="EndTime" value="<?php echo $EndTime; ?>">

        </div>

        <div class="input-group">				
        
            <label for="final price">Final price</label>
            <input type="text" name="FinalPrce" value="<?php echo $FinalPrice;?>">   

        </div>

        <div class="input-group">
            
            <label for="message"> Comments</label>
            <input type="text" name="Coments" value="<?php echo $Coments; ?>">  
            
        </div>    
        
      <div id="messageZone">
          
                <input type="checkbox" id="c1" name="cc" />
                 <label  for="c1"><span></span><a id ="contract">I accept the conditions.</a></label>		

      </div>
                    
        <div class="input-group">
            
            <button type="Submit" class="btn" name="submit">Booking</button>
        </div>
         
         <p><a href="login.php">Login For Book</a> </p>
         <p> Not yet a member? <a href="registration.php">Sign up</a></p>
         <p>Return Back? <a href="index.php">Home</a></p>

         <div class="container" style="background-color:#f1f1f1">
             
         </div>
            </form>    

  </div>
	
</body>	
</html>			
