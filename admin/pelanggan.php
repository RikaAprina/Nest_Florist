 

 <?php 
 include 'fun.php';
 $pelanggan = query("SELECT *FROM   pelanggan ");
  ?>
 


<h2>Data pelanggan </h2>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id pelanggan</th>
      <th scope="col">Email pelanggan</th>
      <th scope="col">password</th>
      <th scope="col">Nama PElanggan</th>
      <th scope="col">Telepon</th>    
      <th scope="col">Opsi</th>

      


    </tr>
  </thead>
  <tbody>
  	<?php foreach ($pelanggan as $p) { ?>
    <tr>
    	
    		 
		 

    
      <td><?= $p['id_pelanggan']; ?></td>
      <td><?= $p['email_pelanggan']; ?></td>
      <td>---------</td>
      <td><?= $p['nama_pelanggan']; ?></td>
      <td><?= $p['telepon']; ?></td> 
      <td><a href="" color="danger" onclick="confirm('yakin?');">Hapus</a>|
      	  <a href="" color="success">tambah</a></td>



    </tr>
    
  <?php } ?>
     
  </tbody>
</table>