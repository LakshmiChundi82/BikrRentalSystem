
<html>
<head>
<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


        
<style>

#loading-img{
display:none;
}

.response_msg{
margin-top:10px;
font-size:13px;
background:#E5D669;
color:#ffffff;
width:250px;
padding:3px;
display:none;
}
.bg{
  /* The image used */
  background-image: url("images/mbbike.jpg");

  /* Full height */
  height: 1000px;

  /* Center and scale the image nicely */
  background-position:center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  
}

label {
  background-color:yellow;
  color: black;
  font-weight: bold;
  padding: 4px;
  text-transform: uppercase;
  font-family: Verdana, Arial, Helvetica, sans-serif;
  font-size: xx-small;
}

form, .content {
  width: 60%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}

</style>
</head>
<body>
<div class ="bg">
           <div class="container">
           <div class="row">

<div class="col-md-8">
    <h1><img src="images/inquiry.png" width="80px"> Contact Form </h1>

<form name="contact-form" action=" " method="post" id="contact-form">

<div class="form-group">
    
      <label for="Name">Name</label>
      <input type="text" class="form-control" name="your_name" placeholder="Name" required>
</div>
        
<div class="form-group">
    
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="your_email" placeholder="Email" required>
</div>

<div class="form-group">
    
       <label for="Phone">Phone</label>
       <input type="text" class="form-control" name="your_phone" placeholder="Phone" required>
</div>

<div class="form-group">
    
       <label for="comments">Comments</label>
       <textarea name="comments" class="form-control" rows="3" cols="28" rows="5" placeholder="Comments"></textarea> 
</div>

    <button type="submit" class="btn btn-primary" name="submit" value="Submit" id="submit_form">Submit</button>
   <img src="img/loading.gif" id="loading-img">
    
   
         <p><a href="login.php" >Login For Book</a> </p>
         <p><a href="index.php">Home</a></p>
</form>

<div class="response_msg"></div>
</div>
</div>
</div>
</div>
    
    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
$("#contact-form").on("submit",function(e){
e.preventDefault();
if($("#contact-form [name='your_name']").val() === '')
{
$("#contact-form [name='your_name']").css("border","1px solid red");
}
else if ($("#contact-form [name='your_email']").val() === '')
{
$("#contact-form [name='your_email']").css("border","1px solid red");
}
else
{
$("#loading-img").css("display","block");
var sendData = $( this ).serialize();
$.ajax({
type: "POST",
url: "contactus.php",
data: sendData,
success: function(data){
$("#loading-img").css("display","none");
$(".response_msg").text(data);
$(".response_msg").slideDown().fadeOut(3000);
$("#contact-form").find("input[type=text], input[type=email], textarea").val("");
}

});
}
});

$("#contact-form input").blur(function(){
var checkValue = $(this).val();
if(checkValue != '')
{
$(this).css("border","1px solid #eeeeee");
}
});
});
</script>

</body>

</html>


<?php 
require_once("config.php");
if((isset($_POST['name'])&& $_POST['name'] !='') && (isset($_POST['email'])&& $_POST['email'] !=''))
{
 require_once("contactus.php");
 $name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$phone = $conn->real_escape_string($_POST['phone']);
$comments = $conn->real_escape_string($_POST['comments']);
$sql="INSERT INTO contactus(name, email, phone, comments) VALUES ('$name','$email', '$phone', '$comments')";
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "Thank you! We will contact you soon";
}
}

?>