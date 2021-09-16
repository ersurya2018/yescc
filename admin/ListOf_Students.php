<?php
session_start();
session_destroy();
header("Location:../Login.php");
?>

<?php
echo "<h1>ListOf_Students page</h1>";
?>