<?php

include 'fun.php';

$id = $_GET['id'];


	if(hapus($id) > 0){

		echo "<script> alert('berhasil di hapus!');
				document.location.href='index.php?halaman=produk';
				</script>";
	}else{
		echo "<script> alert('gagal di hapus!');
				document.location.href='index.php?halaman=produk';
				</script>";
	}