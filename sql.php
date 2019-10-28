<?php

$host = "localhost:8889";
$userName = "root";
$password = "root";
$dbName = "sys";

$conn = mysql_connect("localhost", "root", "root","sys"); // Establishing Connection with Server
$db = mysql_select_db("sys", $conn); // Selecting Database from Server
// Fetching variables of the form which travels in URL


if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
    $Name       = $_POST['Name'];
    $Email      = $_POST['Email'];
    $Phone      = $_POST['Phone'];
    $RentStart  = $_POST['RentStart'];
    $StartTime	= $_POST['StartTime'];
    $RentEnd    = $_POST['RentEnd'];
    $EndTime	= $_POST['EndTime'];
    $FinalPrice=$_POST['FinalPrice'];
    $Coments    = $_POST['Coments'];



if($Name !=''||$Email !=''){
//Insert Query of SQL
$query = mysql_query("INSERT INTO Reservation(Name,Email,Phone,RentStart,StartTime,RentEnd,EndTime,FinalPrice,Coments) 
        VALUES ('$Name','$Email','$Phone,CURDATE(),CURTIME(),CURDATE(),CURTIME(),'$FinalPrice','$Coments')");


echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysql_close($connection); // Closing Connection with Server
?>