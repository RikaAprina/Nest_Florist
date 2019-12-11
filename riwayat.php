<?php
 session_start();
 include 'admin/fun.php';
if(!isset($_SESSION['pelanggan']) OR empty($_SESSION['pelanggan'])){
	echo "<script>location='login.php';</script>";
}

 include'head.php';

 ?>


<section style="background-color: pink;height: 500px;">
	 

		<div class="container bg-danger text-light">

			<h3>Riwayat Belanja <span class="text-success"><?= $_SESSION['pelanggan']['nama_pelanggan'];?></span></h3>

		<table class="table table-boarding text-light">
			<thead>
				<tr>
					<th>NO</th>
					<th>Tanggal</th>
					<th>Status</th>
					<th>Total</th>
					<th>Alamat</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>

				<?php
				$n =1;
				$id_pelanggan =	$_SESSION['pelanggan']['id_pelanggan'];

				 $set = $conn->query("SELECT * FROM pembelian WHERE id_pelanggan = '$id_pelanggan'");
				 
				 while ($ambil = $set->fetch_assoc()){
				 ?>

				<tr>
					<td><?= $n;?></td>
					<td><?= $ambil['tanggal_pembelian'];?></td>
					<td><?= $ambil['status_pembelian'];?></td>
					<td><?= number_format($ambil['total_pembelian']);?></td>
					<td><?= $ambil['Alamat_lengkap'];?></td>
					<td><a href="nota.php?id=<?=$ambil['id_pembelian'];?>" class="btn btn-success">Nota </a>-<a href="pembayaran.php?id=<?= $ambil['id_pembelian'];?>" class="btn btn-primary">Pembayaran </a></td>
				</tr>
				<?php $n++;?>
			<?php }?>
			</tbody>
			
		</table>
	

</section>