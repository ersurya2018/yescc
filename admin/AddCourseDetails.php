<?php
session_start();
session_destroy();
header("Location:../Login.php");
?>
<?php
echo "<h1>AddCourseDetails page</h1>";
?>