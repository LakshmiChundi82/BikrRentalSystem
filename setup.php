<!DOCTYPE html>
<html>
  <head>
    <title>Setting up database</title>
  </head>
  <body>

    <h3>Setting up...</h3>


<?php // 
require_once 'functions.php';

  createTable('users',
              'id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
              username varchar(45),
              email varchar(45),
              password  varchar(45)');
  
 
 createTable('reservation',
  'ID int(10)  NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Name varchar(50) ,
  Email varchar(50) ,
  Phone varchar(50) ,
  RentStart date ,
  StartTime time ,
  RentEnd date ,
  EndTime time ,
  FinalPrice int(50),
  Coments text'
) ;
  
  createTable ('contactus',
   'id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name varchar(50),
    email varchar(50),
    phone int(13),
    comments Varchar(45)'
) ;

  
?>

    <br>...done.
  </body>
</html>

