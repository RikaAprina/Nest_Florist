<?php

ob_start();
session_start();
session_unset();
session_destroy();
session_write_close();
setcookie(session_name(),'',0,'/');
 

echo"<script>alert('you have been logout!');</script>";
echo"<script>location='login.php'</script>";
?>