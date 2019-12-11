<?php
include 'admin/fun.php'; 
session_start();
if(!isset($_SESSION['pelanggan'])){

	echo "<script>alert('anda belum login!,login dulu');</script>";
	echo "<script>location='index.php';</script>";}
	 

?>

 
 

 <?php include 'head.php';?>

 
<section class="konten" style="height: 100%;">
		<div class="container bg-danger">
 <h2 class="btn btn-primary"><i class="fas fa-info-circle"></i> Detail Pembelian </h2>

<?php 
$pecah = $conn->query("SELECT *FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan = pelanggan.id_pelanggan WHERE pembelian.id_pembelian = '$_GET[id]' "); ?>
<?php while($d = $pecah->fetch_assoc()) {?>
 
<div class="row">
	<div class="col-md-4">
<p class="text-light"><h3 class="text-light">Detail Pleanggan</h3>
	<strong>Nama Pelanggan : <?= $d['nama_pelanggan']; ?> </strong> <br>
  <strong>Telepon :</strong> <?= $d['telepon'];?><br>
 <strong> Email   :</strong> <?= $d['email_pelanggan']; ?>
</p>
</div>
	<div class="col-md-4">
<p class="text-warning"><h3 class="text-light">Sub total</h3>
	<strong> Tanggal :</strong>  <?= $d['tanggal_pembelian'];?><br>
  <strong>Total:</strong> <?= number_format($d['total_pembelian']);?>
</p>
	</div>
	<div class="col-md-4">
		<p class="text-success"><h3 class="text-light">Alamat Tujuan</h3>
		<?= $d['Alamat_lengkap'];?></p>
	</div>
</div>
 


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga</th>
      <th scope="col">Sub Harga</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Subtotal</th>    
     

      


    </tr>
    <?php $pecah = $conn->query("SELECT * FROM pembelian_produk  WHERE pembelian_produk.id_pembelian = '$_GET[id]'"); ?>


      
     <?php while($de = $pecah->fetch_assoc()) {?>
         
   
    <tr>
      <?php $b = 1;?>
        <th scope="col"><?= $b;?></th>
        <th scope="col"><?= $de['nama'];?></th>
        <th scope="col">Rp.<?= number_format($de['harga']);?></th>
        <th scope="col">Rp.<?= number_format($de['subharga']);?></th>
        <th scope="col"><?= $de['jumlah'];?></th>
        <th scope="col">Rp.<?= number_format($de['jumlah']*$de['harga']);?></th>
         

 <?php $b++;?>
    </tr>
   
  <?php } ?>

  </thead>
  <tbody>
  	 
    </tr>
    
 
     
  </tbody>
</table>

<div class="row">
  <div class="col-md-7">
    <div class="alert alert-info">
      <p> Silakan melakukan pembayaran Rp.<?= number_format($d['total_pembelian']);?>
<br>
        <strong>Melalui rekening diini "11-22-33-4-455"</strong>
         <?php } ?>
      </p>
      <div class="col-md-6">
      <h5 ><a href="riwayat.php" class="btn btn-success" style="text-decoration: none;"> Konfirmasi</a></h5>
    </div>
    </div>
  </div>
</div>
</div>
</section>