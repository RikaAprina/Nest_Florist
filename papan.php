<div class="  bip">
						<?php  $query = $conn->query("SELECT * FROM produk WHERE categori = 3"); ?>
							<?php while($a = $query->fetch_array()) {?>
								<div class="content mt-3 " style="background-color: white;">
									<div class="col-sm-4 ">
							<?php if ($a['stok'] === 0 OR $a['stok'] > 1) { ?>
								<h5 class="text-warning" style="position: absolute;background-color: blue;width: 90px;margin-top: 20px;opacity: 0.5">Tersedia</h5>
								
								 <h5 class="text-danger" style="  position: absolute;background-color: pink;width: 120px;margin-top: 98px;opacity: 0.5;margin-left: 26px;">𝕟𝕖𝕤𝕥 𝕗𝕝𝕠𝕣𝕚𝕤𝕥</h5>
								<?php } elseif($a['stok'] < 1 OR $a['stok'] === 0 ){?>
							 <h5 class="text-light" style="position: absolute;background-color: red;width: 90px;margin-top: 20px;opacity: 0.5">Sold out</h5>
							<?php }?>
							<img src="admin/assets/img/<?= $a['foto_produk'];?>" class="mt-3"  id="images"/>
							 
							<div class="Price"><strong>Harga :</strong>Rp.<?= number_format($a['harga_produk']);?></div>
							 <div class="ab">
							<p>  <a class="btn btn-secondary as "   href="beli.php?id_produk=<?= $a['id_produk'];?>"><i class="fas fa-shopping-cart"></i>Beli</a> </p>
								 
						</p>
						</div>
							
						</div>
						</div>

					 
						 <div class="card" style="width: 15rem; padding-bottom: -5px;">

							  <div class="card-body">
							    <h5 class="card-title"><?= $a['nama_produk'];?></h5>
							    <h6 class="card-subtitle mb-2 text-muted"><?= $a['nama_produk'];?></h6>
							   <div class="card-text"  style="overflow: hidden; width:200px;hyphens: auto;height: 100px;">  <?= $a['deskripsi'];?>. </div>
							    <a  class="btn btn-success  as" href=" detailb.php?id=<?= $a['id_produk'];?>"  >
							  <i class="fas fa-info-circle"></i>Lihat Full Detail
							</a>
							  </div>
							</div>
 
			 <?php } ?>
			 
			 </div>
 

<!-- Modal -->


<?php

if(isset($_POST['kirim'])){
	$custom = $_POST['custom'];
	$size = $_POST['size'];
	$alamat = $_POST['alamat'];
	$no_hp = $_POST['no_hp'];

	$insert = $conn->query("INSERT INTO `papan bunga` (`id_papan`, `categori`, `custom`, `size`, `alamat_lengkap`, `no_hp`) VALUES (NULL, '$custom', '$size', '$alamat', '$no_hp', '3')");

	var_dump($insert);
	echo"<script>alert('ok')</script>";
}