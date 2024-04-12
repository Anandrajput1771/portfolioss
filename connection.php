<?php
$servername ="sql203.infinityfree.com";
$username = "if0_36349301";
$password ="SwFNGp2PRd6t";
$db="if0_36349301_portfolio";
//$db_name ="job";
$conn = mysqli_connect($servername,$username,$password,$db);
if(!$conn){
    die("connection failed". mysqli_connect_error());
}
else{
echo "connection was successfully";
}