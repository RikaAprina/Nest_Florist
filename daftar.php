<?php 
include 'admin/fun.php';

include'head.php';
?>
<div style="background-color: pink;">
<div class="container">
	<div class="row bg-danger">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
			<div class="panel panel-heading">
				<div class="panel   text-light align-middle bg-secondary " style="font-size: 25px;margin-right: 530px;border-radius: 5px 5px 5px 5px;"> Daftar Pelanggan </div>
			</div>
		<div class="panel panel-body">
		<form method="post" class="form-horizontal">
			 

 
    <div class="form-group col-md-10">
      <label for="nama">Nama</label>
      <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
    </div>
    <div class="form-group col-md-10">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Password">
    </div>
   
  <div class="form-group">
  	<div class="form-group col-md-10">
    <label for="inputAddress">Email</label>
    <input type="email" class="form-control" id="inputAddress" name="email" placeholder="Email">
</div>
  </div>
   <div class="form-group">
   	<div class="form-group col-md-10">
    <label for="inputAddress2">Telepon</label>
    <input type="int" class="form-control" id="inputAddress2" name="telepon" placeholder="Phone ">
</div>
  </div>

  <div class="form-group">
  	<div class="form-group col-md-10">
    <label for="inputAddress2">Alamat</label>
    <textarea type="text" class="form-control " name="Alamat" cols="15" rows="5"></textarea>
</div>
  </div>
  
   
  <button type="submit"  name="daftar" class="btn btn-primary mb-5">Sign in</button>
</form>
</div>
<?php 
if(isset($_POST['daftar'])){
	$email = $_POST['email'];
	$nama = $_POST['nama'];
	$telepon = $_POST['telepon'];
	$alamat  = $_POST['Alamat'];
	$password = md5($_POST['password']);

	$ambil = $conn->query("SELECT * FROM pelanggan WHERE email_pelanggan =  '$email'");
	$pop = $ambil->num_rows;
	if($pop==1){
		echo"<script>alert('email sudah ada!');</script>";
		echo"<script>location='daftar.php';</script>";

	}
	else{
		 $conn->query("INSERT INTO `pelanggan` (`id_pelanggan`, `email_pelanggan`, `password`, `nama_pelanggan`, `telepon`, `alamat_pelanggan`) VALUES (NULL, '$email', '$password', '$nama', '$telepon', '$alamat');");
		 echo"<script>alert('berhasil daftar!');</script>";
		echo"<script>location='index.php';</script>";
	}
}