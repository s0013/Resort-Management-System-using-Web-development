<?php
//  error_reporting(0);
    $host = 'localhost';
    $user = '';
    $password = '';
    $db_name = "registered_users";
    $con=mysqli_connect($host,$user,$password,$db_name);
   
   if(mysqli_connect_error())
   {
    die("Failed to connect with MySQL: ". mysqli_connect_error());
   }

?>