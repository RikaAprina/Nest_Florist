
<?php
session_start();
include 'admin/fun.php';

 

 

 
?>

 <?php include 'head.php';?>


<html>
<head>
<style>
body {
	background-color: pink;
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
 
 
 font-family: Comic Sans MS, cursive, sans-serif;
  position: absolute;
  height: 100%;
  margin-right: 35px;
  color: white;
  text-shadow: 2px 2px blue;
    
}
.bip{
	width: 500px;
	margin-left: 0px;
	 
	border-radius: 25px;
}

 
 
 

.content{
	display: inline-block; block;
	border: 2px solid rgba(0, 0, 0, 0.3);
	border-radius: 25px;
	width: 150px;
	 
 
	 
}
.content h4{
	position: absolute;
	color: black;
	opacity: 0.5;
	margin-top: 15px;
	 
}
.content h4,p{
	width: 50px;
}
 
 
  
.content img{
 	width: 50px;
 	height: 50px;
 }

  .content .btn{
 	display: inline-block;
 }
 .btn{
 	font-size: 10px;
 	width: 
 }

 
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;

  }
  .sidebar a { 
  	text-align: center;}

  
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
  .bip{
  	width: 400px;
  }

  
}
@media (min-width: 576px) { 
	 .content img{
 	width: 150px;
 	height: 150px;
 }

 .content{
	display: inline-block;
	border: 2px solid rgba(0, 0, 0, 0.3);
	border-radius: 25px;
	 width: 200px;
 
	 
}
.content h4{
	position: absolute;
	color: black;
	opacity: 0.5;
	margin-top: 15px;
	 
}
.content h4,p{
	width: 200px;
}
.bip{
	width: 1000px;
	margin-left: 320px;
	 
	border-radius: 25px;

}
p{
	text-align: left;
	color: black;
	text-shadow: none;
}

.isi{
	background-color: #A52A2A;
	height: 1000px;
}

 }
</style>
</head>
<body>

	<div class="isi">
	<div class="container">

<div class="sidebar mt-3">
	<center> 
<div class="container">
 <?php 

      	$id = $_GET['id'];
      	 $query = $conn->query("SELECT * FROM produk WHERE id_produk = '$id'"); ?>
							<?php  $a = $query->fetch_array() 

							 ?>

			<div class="card" style="width: 18rem;">
		  <img src="admin/assets/img/<?= $a['foto_produk'];?>" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Bunga</h5>
		    <p class="card-text"><strong>Nama :</strong> <?= $a['nama_produk'];?></p>
		    <p class="card-text"> <strong>Harga:</strong><?= number_format($a['harga_produk']);?></p>
		    <p class="card-text text-justify"> <strong>Deskripsi:</strong><?= $a['deskripsi'];?></p>
		    <p class="card-text"><strong>Stok:</strong> <?= $a['stok'];?></p>
		    <div class="input-group input-group-sm mb-3">
 
		     <form method="post">
		     	 jumlah <input class="  col-sm-4" type="number" name="jml" size="6"> 
		    	<button type="submit" name="beli"class="btn btn-primary">beli</button>
		    </form>
		    <p><a class="btn btn-secondary mt-3 mr-3" href="main.php">Menu Lainnya?</a></p>

		    <?php 
		    	if(isset($_POST['beli'])){
		    		$id_produk = $_GET['id'];
		    		$jml = $_POST['jml'];

		    		$_SESSION['keranjang'][$id_produk] = $jml;
		    		echo "<script>alert('sudah di keranjang');</script>";
					echo "<script>location='keranjang.php';</script>";
		    	}
		    ?>


   
</div>
</div>
</div>
</center>
</div>


						   <div class="  bip">
						<?php  $query = $conn->query("SELECT * FROM produk WHERE categori = 2"); ?>
							<?php while($a = $query->fetch_array()) {?>
								<div class="content mt-3"style="background-color: white;">
									<div class="col-sm-4 ">
							  
							<img src="admin/assets/img/<?= $a['foto_produk'];?>" class="mt-3"  id="images"/>
							 
							<p class="Price"><strong>Harga :</strong><?= number_format($a['harga_produk']);?></p>
							 
							<p>  <a class="btn btn-secondary ml-4"   href="beli.php?id_produk=<?= $a['id_produk'];?>"><i class="fas fa-shopping-cart"></i></a> 
							 <a  class="btn btn-success ml-2" href=" detailb.php?id=<?= $a['id_produk'];?>"  >
							  <i class="fas fa-info-circle"></i>
							</a></p>
							
						</div>
						</div>
						 
 
			 <?php } ?>
			 
			 </div>
 
 
</div>
</div>
			
				 		
				 
				 
	
	 	 	 
		 
			 
 
 


















 




 
<?php include'foot.php'?>
 




















 