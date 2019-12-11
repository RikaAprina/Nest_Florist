<?php 

	$conn = mysqli_connect("localhost","root","","shop");

function query($query){
	
	global $conn;
		$result = mysqli_query($conn,$query);
		$rows = [];
		
	while ($row = mysqli_fetch_array($result)){
		$rows[] = $row;
	}
	
	return  $rows;
}

function hapus($id){

	global $conn;

	$query = "DELETE FROM produk WHERE id_produk = $id";

	$result = mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}

function tambahproduk($data){
	global $conn;

	$nama = $data['nama'];
	$harga = $data['harga'];
	 
	$deskripsi = $data['deskripsi'];
	$stok = $data['stok'];
	$categori = $data['Categori'];

	 
	$foto = upload();

	 

	$query = "INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`,  `foto_produk`, `deskripsi`,`categori`,`stok`) VALUES (NULL, '$nama','$harga','$foto','$deskripsi','$categori','$stok')";
 
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
}

function ubahproduk($data){

	global $conn;
	
	$nama = $data['nama'];
	$harga = $data['harga'];
	$categori = $data['categori'];
	$deskripsi = $data['deskripsi'];
	  $stok = $data['stok'];
	$id = $data["id"];
	$gbrlama = $data["gambarlama"];
 
	if ($_FILES["foto"]["error"] === 4){
		$gbr = $gbrlama;
	}
	else {
		$gbr = upload();
	}


     $ubh = "UPDATE `produk` SET `id_produk` = '$id', `nama_produk` = '$nama', `harga_produk` = '$harga', `foto_produk` = '$gbr', `deskripsi` = '$deskripsi',`stok`= '$stok',`categori` = '$categori' WHERE `produk`.`id_produk` = $id";
 	var_dump($ubh);
 mysqli_query($conn ,$ubh);

 return mysqli_affected_rows($conn);
}


function upload(){
	
	$nama = $_FILES['foto']['name'];
	$size = $_FILES['foto']['size'];
	$error = $_FILES['foto']['error'];                            
	$tmp = $_FILES['foto']['tmp_name'];
	if($error === 4){
		echo"<script>alert('insert your picture');</script>";
		return false;
	}
	
	$isifile = ['jpg','jpeg','png'];
	$isi = explode('.' ,$nama);
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
	$newname .=$nama;
	if(move_uploaded_file($tmp,'assets/img/'.$newname)) 
		return $newname;
		 
	
}

function uploadb(){
	
	$nama = $_FILES['bukti']['name'];
	$size = $_FILES['bukti']['size'];
	$error = $_FILES['bukti']['error'];                            
	$tmp = $_FILES['bukti']['tmp_name'];
	if($error === 4){
		echo"<script>alert('insert your picture');</script>";
		return false;
	}
	
	$isifile = ['jpg','jpeg','png'];
	$isi = explode('.' ,$nama);
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
	$newname .=$nama;
	if(move_uploaded_file($tmp,'assets/bukti/'.$newname)) 
		return $newname;
		 
	
}
	

