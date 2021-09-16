<?php
session_start();
session_destroy();
header("Location:../Login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <!-- include header -->
    <?php include 'header.php' ?>
    <!-- main div -->
    


    <!--include footer -->
    <?php include 'footer.php' ?>
</body>
</html>