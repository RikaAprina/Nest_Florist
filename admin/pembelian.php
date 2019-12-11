 

 <?php 
 include 'fun.php';
 $pembelian = query("SELECT *FROM   pembelian JOIN pelanggan ON pembelian.id_pelanggan = pelanggan.id_pelanggan ");
  ?>
 


<h2>Data Pembelian </h2>

 

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama pelanggan</th>
      <th scope="col">tanggal pembelian</th>
      <th scope="col">total pembelian</th>

    <th scope="col">Status pembelian</th>
      <th scope="col">Opsi</th>

      


    </tr>
  </thead>
  <tbody>
  	<?php $a = 1; ?>
  	<?php foreach ($pembelian as $p) { ?>
    <tr>
    	
    		 
		 

    
      <td><?= $a; ?></td>
      <td><?= $p['tanggal_pembelian']; ?></td>
      <td><?= $p['nama_pelanggan']; ?></td>
      <td><?= $p['total_pembelian']; ?></td>
      <td> <?= $p['status_pembelian'];?> </td>


       
      <td><a href="" color="danger" onclick="confirm('yakin?');">Hapus</a>|
      	  <a href="index.php?halaman=detail&id=<?= $p['id_pembelian'];?>" color="button">Detail</a>
          <a class="btn btn-success"href="index.php?halaman=pembayaran&id=<?= $p['id_pembelian'];?>" color="button">Lihat Pembayaran</a>
      </td>



    </tr>
    <?php $a++; ?>
  <?php } ?>
     
  </tbody>
</table>