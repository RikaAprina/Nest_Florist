<?php

session_start();
 

$id = $_GET['id_produk'];

if($_SESSION['keranjang'][$id] ){

	$_SESSION['keranjang'][$id] =+1 ;
}else
{

	$_SESSION['keranjang'][$id] = 1;
}

echo "<script>alert('sudah di keranjang');</script>";
echo "<script>location='keranjang.php';</script>";