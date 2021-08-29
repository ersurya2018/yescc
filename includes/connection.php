<?php
$username="root";
$pass="";
$server="localhost";
$db="yescc";

$con=mysqli_connect($server,$username,$pass,$db);

if($con){
    ?>
    <script>
    alert("DataBase connnected Succesfully ")
</script>
    <?php
}
else{
    echo "connection not successfully";
}
?>