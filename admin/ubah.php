 <?php 

require 'fun.php';

$id = $_GET["id"];

 $d = query("SELECT *FROM produk WHERE id_produk = $id  ")[0];

 if(isset($_POST["ubah"])){

	if (ubahproduk($_POST) > 0){
		 

	echo "<script> alert('berhasil di ubah!');
				document.location.href='index.php?halaman=produk';
				</script>";
	}else{
		echo "<script> alert('gagal di ubah!');
			 

				</script>";
	}
	}
	?>


<h2>Ubah Produk</h2>

 
	 
<form method="post" enctype="multipart/form-data">


	 <input type="hidden" name="id" class="form-control"   value="<?= $d["id_produk"];?>">
   
    <input type="hidden" name="gambarlama"  value="<?= $d["foto_produk"];?>">


		<div class="form-group">
			<label>nama</label>
			<input type="text" class="form-control" name="nama" value="<?= $d["nama_produk"];?> ">
		</div>
		<div class="form-group">
			<label>Harga(Rp)</label>
			<input type="number" class="form-control" name="harga" value="<?= $d["harga_produk"];?>" >
		</div>
		<div class="form-group">
			<label>Stok</label>
			<input type="number" class="form-control" name="stok" value="<?= $d["stok"];?>" >
		</div>
		<div>
			<label>Categori
			<input type="number" class="form-control" name="categori" value="<?= $d["categori"];?>">
		</div>
		<div>
			<label>Deskrispi</label>
			<textarea class="form-control" type="text" name="deskripsi" rows="10" ><?= $d["deskripsi"];?></textarea>
		</div>
		<div>
		 
		<label for="foto">gambar</label>
		 
   		
    <input type="file" name="foto"  " id="foto" placeholder="">
     <img style="width:250px;" src="assets/img/<?= $d["foto_produk"];?>">
  			</div>
  			<br>

		<button class="btn btn-primary" name="ubah">simpan</button>
	 
</form>