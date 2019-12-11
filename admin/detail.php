 

 <?php 
 include 'fun.php';
  ?>
 


 


<h2>Nota Pembelian </h2>

<?php 
$pecah = $conn->query("SELECT *FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan = pelanggan.id_pelanggan WHERE pembelian.id_pembelian = '$_GET[id]' "); ?>
<?php while($d = $pecah->fetch_assoc()) {?>
 

<strong>Nama Pelanggan : <?= $d['nama_pelanggan']; ?> </strong>

<p> <strong>Telepon :</strong> <?= $d['telepon'];?><br>
 <strong> Email   :</strong> <?= $d['email_pelanggan']; ?>
</p>

<p><strong> Tanggal :</strong>  <?= $d['tanggal_pembelian'];?><br>
  <strong>Total:</strong> <?= $d['total_pembelian'];?>
</p>
 <?php } ?>


<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Subtotal</th>    
      <th scope="col">Opsi</th>

      


    </tr>
    <?php $pecah = $conn->query("SELECT * FROM pembelian_produk JOIN produk ON pembelian_produk.id_produk = produk.id_produk WHERE pembelian_produk.id_pembelian = '$_GET[id]'"); ?>


      
     <?php while($de = $pecah->fetch_assoc()) {?>
         
   
    <tr>
      <?php $b = 1;?>
        <th scope="col"><?= $b;?></th>
        <th scope="col"><?= $de['nama_produk'];?></th>
        <th scope="col"><?= $de['harga_produk'];?></th>
        <th scope="col"><?= $de['jumlah'];?></th>
        <th scope="col"><?= $de['jumlah']*$de['harga_produk'];?></th>
        <th scope="col"><a color = "danger" href="" onclick="confirm('yakin');">hapus</a></th>

 <?php $b++;?>
    </tr>
   
  <?php } ?>

  </thead>
  <tbody>
  	 
    </tr>
    
 
     
  </tbody>
</table>

 
