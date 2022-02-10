<?php
session_start();
session_destroy();
header("Location: http://localhost/complete_project/startmember.php"); 
exit;
?>