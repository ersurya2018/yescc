<?php
session_start();
session_destroy();
?>
<script>
        alert("Logout successfully....");
    location.replace("../Login.php");
    </script>
