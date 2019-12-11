<?php

 

$id = $_GET['id'];


 



 
session_start();
unset($_SESSION['keranjang'][$id]);
 
 
 
 
echo"<script>location='keranjang.php'</script>";
?>
	}