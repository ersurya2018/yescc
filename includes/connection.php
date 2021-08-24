<?php
$username="root";
$pass="";
$server="localhost";
$db="yescc";

$con=mysqli_connect($server,$username,$pass,$db);

if($con){
    echo "connection successfully";
}
else{
    echo "connection not successfully";
}
?>