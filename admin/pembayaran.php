
<?php 

include 'fun.php';
$id = $_GET['id'];

$ambil = $conn->query("SELECT*FROM pembayaran WHERE id_pembelian = '$id'");
$a = $ambil->fetch_assoc();

 
   
  
?>

<table class="table">
  <thead class="thead-dark">
    <tr>
       
      <th scope="col">Nama</th>
      <th scope="col">Bank </th>
       <th scope="col">Tanggal</th>
       <th scope="col">Jumlah</th>
       <th scope="col">Bukti Foto</th>

    </tr>
  </thead>
  <tbody>
    <tr>
 
    	 
    		
    	
    
      <td><?= $a['nama'];?> </td>
      <td><?= $a['bank'];?> </td>
       <td><?= $a['tanggal'];?> </td>
        <td><?= $a['jumlah'];?> </td>
        <td><img width="100px" height="100px" src="assets/bukti/<?= $a['bukti_pembayaran'];?>" > </td>
      
 </tr>
  
    
    
  </tbody>
</table>