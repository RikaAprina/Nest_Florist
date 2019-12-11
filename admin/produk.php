 

 <?php 
 include 'fun.php';
 $produk = query("SELECT *FROM   produk ");
  ?>
 


<h2>Data Produk </h2>

<table class="table  ">
  <thead class="thead-dark  ">
    <tr>
      <th scope="col">id produk</th>
      <th scope="col">Jenis Produk</th>
    
      <th scope="col">Deskripsi</th>
    


    </tr>
  </thead>
  <tbody>
  	 
    <tr>
    	<td>1</td>
       <td><a href="index.php?halaman=bucket">Bucket</a></td> 
      <td>Ini Produk untuk bucket yah</td>
    
    </tr>

     <tr>
      <td>2</td>
      <td> <a href="index.php?halaman=bunga"> Pot Bunga</a></td> 
      <td>Ini Produk untuk Bunga yah</td>
    </tr>

     <tr>
      <td>3</td>
      <td><a href="index.php?halaman=pagar"> Papan Bunga</a></td> 
      <td>Ini Produk untuk Pagar yah</td>
    </tr>
  
     
  </tbody>
</table>
<button class="btn btn-primary "  ><a style="color:red;" href="index.php?halaman=tambahproduk">Tambah</button>