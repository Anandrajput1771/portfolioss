<?php

include "connection.php";



$name =$_POST['user'];
$email =$_POST['email'];
$number =$_POST['number'];
$subject =$_POST['subject'];
$message =$_POST['message'];




$sql = mysqli_query($conn,"INSERT INTO data (name, email, phone, subject, message) 
VALUES ('$name ', '$email', '$subject','$subject','$message')");

if($sql){
   echo "Submit Your Message."
    
}
else
{
    echo "Faild";
}









?>










