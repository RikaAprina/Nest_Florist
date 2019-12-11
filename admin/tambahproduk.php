<?php 
include 'fun.php';

if(isset($_POST['save']))
{
	if(tambahproduk($_POST) > 0){
		echo "<script> alert('berhasil di tambah!');
				document.location.href='index.php?halaman=produk';
				</script>";
	}else{
		echo "<script> alert('gagal di tambah!');
			 

				</script>";
	}
	}


?>

<h2>Tambah Produk</h2>

<form method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>nama</label>
			<input type="text" class="form-control" name="nama">
		</div>
		<div class="form-group">
			<label>Harga(Rp)</label>
			<input type="number" class="form-control" name="harga">
		</div>
		<div>
			<label>Categori 
			<input type="number" class="form-control" name="Categori">
		</div>
		<div>
			<label>Deskrispi</label>
			<textarea class="form-control" type="text" name="deskripsi" rows="10"></textarea>
		</div>
		<div>
			<label>Stok</label>
			<textarea class="form-control" type="number" name="stok"  ></textarea>
		</div>
		<div>
			<label class="mb-3">Gambar</label>
			<input type="file" class="form-control" name="foto">
		</div>

		<button class="btn btn-primary" name="save">simpan</button>
</form>