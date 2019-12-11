<div class="  bip">
					<?php  $data = query("SELECT *FROM produk");?>	 
							<?php foreach ($data as $a) {?>
								<div class="content mt-3" style="background-color: white;">
									<div class="col-sm-4 ">
							 <h4><?= $a['nama_produk'];?></h4> 
							<img src="admin/assets/img/<?= $a['foto_produk'];?>" class="mt-3" width="200" height="200" id="images"/>
							 
							<p class="Price"><?= number_format($a['harga_produk']);?></p>
							<p>  <a class="btn btn-secondary ml-4"   href="beli.php?id_produk=<?= $a['id_produk'];?>"><i class="fas fa-shopping-cart"></i></a> 
							 <a  class="btn btn-success ml-2" href=" detail.php?id=<?= $a['id_produk'];?>"  >
							  <i class="fas fa-info-circle"></i>
							</a></p>
							 
						</div>
						</div>
						 
 
			 <?php } ?>
			 
			 </div>
