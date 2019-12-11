<div class="sidebar mt-3">
	<center> 
 <?php if(isset($_GET['halaman'])){

                        if($_GET['halaman']== "bucket")
                        {
                            echo"<h4 style='background-color:#FFFAF0;color:hotpink;height:50px;padding-top:8px;width:100px;font-size:25px; '>Bucket</h4>";
                   		 }
                   		 elseif ($_GET['halaman'] =="potBunga") {
                   		 	echo"<h4 style='background-color:#FFFAF0;color:hotpink;height:50px;padding-top:8px;width:100px;font-size:25px; '>Bunga</h4>";
                   		 }
                   		 elseif ($_GET['halaman'] =="pagar") {
                   		 	echo"<h4  background-color:#FFFAF0;color:hotpink;height:50px;padding-top:8px;width:100px;font-size:25px;  '>Pagar</h4>";
                   		 }
                   		 
                   		  
                   	}
             ?>
             <h1><a href="index.php" title="Kembali"><i class="fas fa-chevron-circle-left"></i></a></h1>
   
</div>

