<?php
include 'admin/fun.php'; 
session_start();
if(!isset($_SESSION['pelanggan'])){

	echo "<script>alert('anda belum login!,login dulu');</script>";
	echo "<script>location='login.php';</script>";}

elseif(empty($_SESSION['keranjang'])){
	echo "<script>alert('Keranjang Kosong');</script>";
	echo "<script>location='index.php';</script>";
}
 

?>

 
 

  <?php include 'head.php';?>


	<section class="konten" style="height: 100%;">
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
			 			 
			 			</tr>

			 		</thead>
			 		<tbody>
			 		<?php $total =0;?>
			 		<?php $n=1;?>
			 		<?php foreach ($_SESSION['keranjang'] as $id => $jml) { ?>
			 		<?php  $d = query("SELECT *FROM produk WHERE id_produk = '$id'  ")[0];?>
 				 
 					 
			 	  	 <?php $subtotal = $jml*$d['harga_produk'];?>
			 		 
			 			<tr>
			 				<th><?= $n;?></th>
			 				<th><?= $d['nama_produk'];?></th>
			 				<th>Rp.<?= number_format($d['harga_produk']);?></th>
			 				<th><?= number_format($jml);?></th>
			 				<th>Rp.<?= number_format($subtotal);?></th>
			 			 

			 			</tr>
			 			<?php $n++;?>
			 			<?php $total +=$subtotal;?>
			 		<?php } ?>
			 		</tbody>
			 		<tfoot>
			 			<tr>
			 				<th colspan="4">Total :</th>
			 				<th ><?= number_format($total  );?></th>
			 			</tr>
			 		</tfoot>
			 		


			 	</table>

			 		<div class="container">
			 			<div class="poto">
			 		 <div class="row">
			 		 	 
			 				<div class="col-sm-4">
			 					<div class="poto"    style=" background-color: lightblue;width: 300px;height: 300px;overflow-y: scroll;">
						 	<?php foreach ($_SESSION['keranjang'] as $id => $jml) {
						 		 
						 	 

						 	$ambil = $conn->query("select* from produk where id_produk = '$id'");
						 	$a = $ambil->fetch_array();?>

						 	<img width="260px" height="200px" style="margin-right: 8px;margin-left: 10px;" src="admin/assets/img/<?= $a['foto_produk'];?>">
						<?php  }?>
					</div>
				</div>
			 

			 	<form method="post">
			 	 <div class="biodata"   >
			 		 
			 		 
			 		 
			 	<div class="form-group" ">
			    <div class="input-group mb-2">
			        <div class="input-group-prepend">
			          <div class="input-group-text "><i class="fas fa-id-badge" size=""></i></div>
			        </div>
			        <input   type="text"  readonly  value="<?= $_SESSION['pelanggan']['nama_pelanggan'];?>" class="form-control">
			      </div>

			      <div class="form-group">
			    <div class="input-group mb-2">
			        <div class="input-group-prepend">
			          <div class="input-group-text"><i class="fas fa-phone"></i></div>
			        </div>
			        <input type="number"   readonly value="<?= $_SESSION['pelanggan']['telepon'];?>" class="form-control"> 
			      </div>


			         <div class="form-group">
			    <div class="input-group mb-2">
			        <div class="input-group-prepend">
			          <div class="input-group-text"><i class="fas fa-truck"></i></div>
			        </div>
			        <select class="form-control" name="id_onkir">
			 					<option>Pilih Onkos Kirim</option>
			 					<?php $ambil = $conn->query("SELECT * FROM onkir");
			 							while ($a = $ambil->fetch_assoc()) { ?>
			 			
			 					<option value="<?= $a['id_onkir']?>"> <?= $a['alamat']?>-Rp.<?= number_format( $a['harga'])?></option>
			 				 
			 				<?php }?>
			 				</select>
			 				 
			 				</div>
			      </div>
			       
			 	  <div class="form-group">
			    <div class="input-group mb-2">
			        <div class="input-group-prepend">
			          <div class="input-group-text"><i class="fas fa-phone"></i>Custom</div>
			        </div>
			        <input type="text" name="custom"    placeholder ="Nama Custom"> 
			      </div>
			  </div>
			 
			 			 
			      <div class="form-group">
			    <div class="input-group mb-2">
			        <div class="input-group-prepend">
			          <label class="input-group-text "><i class="fas fa-map-marker-alt"></i></label>
			        </div>
			        
			        <textarea rows="2"     class="form-control" name="alamat_lengkap" placeholder="silakan masukan alamat lengkap"  >
			 					
			 		</textarea>	
			 	</div>

			      </div>

			 			 
			 		
			 			<button href="#" type="submit" name="checkout" title="Pembayaran" class="btn btn-light mb-5"><i class="fas fa-money-check-alt"> Bayar</i></button>
			 		</div>

			 		
			 	</form>
		 
			 	<?php if(isset($_POST['checkout'])){

			 		$id_onkir = $_POST['id_onkir'];
			 		$id_pelanggan = $_SESSION['pelanggan']['id_pelanggan'];
			 		$date = date("Y-m-d");

			 		$ambil = $conn->query("SELECT * FROM onkir");
			 		$c = $ambil->fetch_assoc();
			 		 
			 		 $custom = $_POST['custom'];
			 		$harga = $c['harga'];
			 		$nama_kota = $c['alamat'];
			 		$totalbelanja = $total+$harga;
			 		$alamatlengkap = $_POST['alamat_lengkap'];
			 		 
  
			 	  $query = ("INSERT INTO `pembelian` (`id_pembelian`, `id_pelanggan`, `id_onkir`, `tanggal_pembelian`, `total_pembelian`, `custom`, `harga`, `Alamat_lengkap`, `status_pembelian`) VALUES (NULL,'$id_pelanggan','$id_onkir', '$date', '$totalbelanja','$custom','$harga','$alamatlengkap','pending')");
			 	  $fetch = mysqli_query($conn,$query);
			 	   

			 	  $barubeli = $conn->insert_id;
			 	  foreach ($_SESSION['keranjang'] as $id => $jml) {
			 	  	$kon = $conn->query("SELECT * FROM produk WHERE id_produk = '$id'");
			 	  	$b = $kon->fetch_assoc();

			 	  	$nama = $b['nama_produk'];
			 	  	$harga = $b['harga_produk'];
			 	  
			 	  	$subharga = $b['harga_produk']*$jml;

			 	   

			 	  	$conn->query("INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `nama`, `harga`, `subharga`, `jumlah`,`custom`) VALUES (NULL, '$barubeli', '$id', '$nama', '$harga','$subharga', '$jml','$custom')");
			 	  	$conn->query("UPDATE produk SET stok = stok -'$jml' WHERE id_produk = '$id'");

			 	  }
			 	unset($_SESSION['keranjang'] );
			  	echo "<script>alert('berhasil di beli');</script>";
			  	echo "<script>location='nota.php?id=$barubeli';</script>";
			 		 
			 	}?>

 

















 <script src="admin/assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="admin/assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="admin/assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="admin/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="admin/assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="admin/assets/js/custom.js"></script>
    
   
</body>
</html>