<?php 

$server="localhost";
$username="u222351876_shubhambank";
$password="Admin@1224";
$db="u222351876_shubhambank";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  //Connection successfully established
}

else
    die("connection to this database failed due to " .mysqli_connect_error()); //connection not establised
    
?>
