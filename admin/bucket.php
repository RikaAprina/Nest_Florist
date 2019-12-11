 

 <?php 
 include 'fun.php';
 $produk = query("SELECT *FROM   produk WHERE categori = 2");
  ?>
 


<h2>Data Produk </h2>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id produk</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga PRoduk</th>
      <th scope="col">Gambar</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Ubah | Hapus</th>


    </tr>
  </thead>
  <tbody>
  	<?php $a = 1;?>
  	<?php foreach ($produk as $p) { ?>
    <tr>
    	
    		 
		 

      <th  ><?= $a;?></th>
      <td><?= $p['nama_produk']; ?></td>
      <td><?= number_format($p['harga_produk']); ?></td>
      <td><img  style="width: 100px;height: 100px;" src="assets/img/<?= $p['foto_produk']; ?>"></td>
      <td> <?= $p['deskripsi']; ?></td>
      <td><a href="index.php?halaman=hapus&id=<?= $p['id_produk'];?>" color="danger" onclick="confirm('yakin?');">Hapus</a>|
      	  <a href="index.php?halaman=ubah&id=<?= $p['id_produk'];?>" color="success">ubah</a></td>



    </tr>
    <?php $a++;?>
    
  <?php } ?>
     
  </tbody>
</table>
<button class="btn btn-primary "  ><a style="color:red;" href="index.php?halaman=tambahproduk">Tambah</button>
   <button class="btn btn-primary "  ><a style="color:red;" href="index.php?halaman=produk">Kembali</button>