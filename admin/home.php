<?php 

 

 include 'fun.php';
$ambil = $conn->query("select * from admin");

 
?>
<h3 class="">Daftar Anggota</h3>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Username</th>
      <th scope="col">Nama </th>
      <th scope="col">Foto</th>
    </tr>
  </thead>
  <tbody>
    <tr>

    	<?php 
    	$i = 1;
    	while ($a= $ambil->fetch_array()) {?>
    		
    	
      <th scope="row"><?= $i;?></th>
      <td><?= $a['username'];?> </td>
      <td><?= $a['nama_lengkap'];?> </td>
        <td><img width="100px" height="100px" src="assets/gambar/<?= $a['gambar'];?>" > </td>
      
 </tr>
  <?php 
	$i++;
	}?>
    
    
  </tbody>
</table>