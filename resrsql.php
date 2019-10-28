<?php 

$host = "localhost";
$userName = "root";
$password = "root";
$dbName = "sys";

$db = mysqli_connect($host, $userName, $password, $dbName);


//Selecting Database from Server
if(isset($_POST['book'])){ // Fetching variables of the form which travels in URL
    $Name       = mysqli_real_escape_string($db,$_POST['Name']);
    $Email      = mysqli_real_escape_string($db,$_POST['Email']);
    $Phone      = mysqli_real_escape_string($db,$_POST['Phone']);
    $RentStart  = mysqli_real_escape_string($db,$_POST['RentStart']);
    $StartTime	= mysqli_real_escape_string($db,$_POST['StartTime']);
    $RentEnd    = smysqli_real_escape_string($db,$_POST['RentEnd']);
    $EndTime	= mysqli_real_escape_string($db,$_POST['EndTime']);
    $FinalPrice=mysqli_real_escape_string($db,$_POST['FinalPrice']);
    $Coments    = mysqli_real_escape_string($db,$_POST['Coments']);

    
  if (empty($Name)) { array_push($errors, "Name is required"); }
  if (empty($Email)) { array_push($errors, "Email is required"); }
  if (empty($Phone)) { array_push($errors, "Phone is required"); }
  if (empty($RentStart)) { array_push($errors, "RentStart is required"); }
  if (empty($StarTime)) { array_push($errors, "StarTime is required"); }
  if (empty($RentEnd)) { array_push($errors, "RentEnd is required"); }
  if (empty($EndTime)) { array_push($errors, "EndTime is required"); }
  if (empty($FinalPrice)) { array_push($errors, "FinalPrice is required"); }
  if (empty($Coments)) { array_push($errors, "Coments is required"); }
  
  
  
  
$user_check_query = "SELECT * FROM Reservation WHERE Name='$Name' OR Email='$Email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['Name'] === $Name) {
      array_push($errors, "Username already exists");
    }

    if ($user['Email'] === $Email) {
      array_push($errors, "email already exists");
    }
  }

//Insert Query of SQL 
$query = mysql_query("INSERT INTO Reservation(Name,Email,Phone,RentStart,StartTime,RentEnd,EndTime,FinalPrice,Coments) 
        VALUES ('$Name','$Email','$Phone,CURDATE(),CURTIME(),CURDATE(),CURTIME(),'$FinalPrice','$Coments')");



$results = mysqli_query($db, $query);


// Close connection
mysqli_close($db);
}
   
?>