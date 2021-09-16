<?php
session_start();
session_destroy();
header("Location:../Login.php");
?>

<?php echo 'Coursewise_Report.php' ?>