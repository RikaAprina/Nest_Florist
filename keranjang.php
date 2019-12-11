<?php
include 'admin/fun.php'; 
session_start();

 if(!isset($_SESSION['keranjang']) OR empty($_SESSION['keranjang'])){
 	echo"<script>alert('Anda Belum belanja!');</script>";
 	echo "<script>location='main.php';</script>";
 }

?>

 
 

 <?php include 'head.php';?>

 
	<section class="konten ">
		<div class="container">
			<h1 style="color: blue;font-family: 'Times New Roman', Times, serif;"><i class="fas fa-shopping-cart"></i>  Keranjang Belanja</h1>
			 
			 <hr>
			 	<table class="table table-bordered text-light" style="background-color: red;">
			 		<thead>
			 			<tr>
			 				<th>NO</th>
			 				<th>Produk</th>
			 				<th>Harga</th>
			 				<th>Jumlah</th>
			 				<th>Sub Harga</th>
			 				<th>Opsi</th>
			 			</tr>

			 		</thead>
			 		<tbody>
			 		<?php $n=1;?>
			 		<?php foreach ($_SESSION['keranjang'] as $id => $jml) { ?>
			 		<?php  $d = query("SELECT *FROM produk WHERE id_produk = '$id'  ")[0];
 				 
 					?>
			 	  	 <?php $subtotal = $jml*$d['harga_produk'];?>
			 		 
			 			<tr>
			 				<th><?= $n;?></th>
			 				<th><?= $d['nama_produk'];?></th>
			 				<th>Rp.<?= number_format($d['harga_produk']);?></th>
			 				<th><?= number_format($jml);?></th>
			 				<th>Rp.<?= number_format($subtotal);?></th>
			 				<th><a href="hapus.php?id=<?= $d['id_produk'];?>" onclick="confirm('yakin?');" class="text-primary" style="text-decoration: none;"><i class="fas fa-trash-alt"></i></a></th>

			 			</tr>
			 			<?php $n++;?>
			 		<?php } ?>
			 		</tbody>
			 		


			 	</table>
			 	<a href="index.php"class="btn btn-secondary text-light"><i class="fas fa-angle-double-left"></i> Lanjut belanja</a>
			 	<a href="checkout.php" class="btn btn-primary text-light"><i class="fas fa-shopping-basket"></i> Checkout</a>
























 
 