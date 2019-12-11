 
<?php 
 
 session_start();
 include 'admin/fun.php';
if(!isset($_SESSION['pelanggan']) OR empty($_SESSION['pelanggan'])){
	echo "<script>location='login.php';</script>";
}

 include'head.php';

 ?>

 
<div class ="bayar" style="background-color: pink;height: 500px;">
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
			<div class="panel panel-heading">
				<div class="panel   text-danger align-middle "> <h3><i class="fas fa-money-bill-wave-alt"></i> Pembayaran Pelanggan</h3> </div>
				<?php
				$id = $_GET['id'];
				 $a = $conn->query("SELECT * FROM pembelian WHERE id_pembelian = '$id'");
				 
				 $b = $a->fetch_assoc();
				 $id_pembelian = $b['id_pembelian'];
				 ?>

				<p class="alert alert-success">silakan lakukan pembayaran sebesar <strong> Rp.<?= number_format($b['total_pembelian']);?></strong></p>
			</div>
		<div class="panel panel-body">
		<form method="post" enctype="multipart/form-data" class="form-horizontal">
			 
 
 
    <div class="form-group col-md-6">
    	<div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-id-badge"></i></div>
        </div>
        <input type="text" class="form-control"  name="nama" placeholder="Nama Penyetor">
    	</div>
    </div>

     <div class="form-group col-md-6">
    	<div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-money-check-alt"></i></div>
        </div>
        <input type="text" class="form-control"  name="bank" placeholder="Nama Bank">
    	</div>
    </div>

  
  <div class="form-group col-md-6">
    	<div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-money-bill-wave"></i></div>
        </div>
        <input type="text" class="form-control"  name="Jumlah" placeholder="Jumlah Duit">
    	</div>
    </div>  

   <div class="form-group col-md-6">
    	<div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
        </div>
        <input type="date" class="form-control"  name="tgl" placeholder="Tanggal">
    	</div>
    </div>

    <div class="form-group col-md-6">
    	<div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text border-blue;" style="height:  30px;">Masukan bukti Pembayaran</div>
        </div>
    

       

<div class="image-upload">
    <label for="file-input">
        <img src="admin/assets/logo/upload.jpg" class="rounded-circle" height="50px" style="margin-top:-19px;position: absolute;" width="80px" />
    </label>

    <input id="file-input" style="display: none;" name="bukti" type="file"/>
</div>
    </div>
    </div>
    	 
  
   
  <button type="submit"  name="kirim" class="btn btn-primary"> Kirim</button>
</form>

<?php

if (isset($_POST['kirim'])){
 

	$nama = $_POST['nama'];
	$bank = $_POST['bank'];
	$jml = $_POST['Jumlah'];
	$tgl = $_POST['tgl'];
	
	$name = $_FILES['bukti']['name'];
	$size = $_FILES['bukti']['size'];
	$error = $_FILES['bukti']['error'];                            
	$tmp = $_FILES['bukti']['tmp_name'];
	if($error === 4){
		echo"<script>alert('insert your picture');</script>";
		return false;
	}
	
	$isifile = ['jpg','jpeg','png'];
	$isi = explode('.' ,$name);
	$isi = strtolower(end($isi));
	
	if(!in_array($isi,$isifile)){
		echo"<script>alert('not a valid file');</script>";
		return false;
	}
	
	if($size > 1000000){
		echo"<script>alert('file is too big');</script>";
		return false;
	}
	$newname = uniqid();
	$newname .= '.';
	$newname .=$name;
	 move_uploaded_file($tmp,'admin/assets/bukti/'.$newname);

	$conn->query("INSERT INTO `pembayaran` (`id_pembayaran`, `id_pembelian`, `nama`, `bank`, `jumlah`, `tanggal`, `bukti_pembayaran`) VALUES (NULL, '$id_pembelian', '$nama', '$bank', '$jml', '$tgl', '$newname')");
	$conn->query("UPDATE `pembelian` SET `status_pembelian` = 'Berhasil di bayar' WHERE `pembelian`.`id_pembelian` = '$id_pembelian'");

	echo "<script>alert('terimakasih');</script>";
	echo "<script>location='riwayat.php';</script>";
	 



}


