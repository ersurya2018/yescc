<?php
session_start();
session_destroy();
header("Location:../Login.php");
?>
<script>
        alert("Logout successfully....");
    
</script>
