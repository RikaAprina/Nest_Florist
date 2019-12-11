<?php

 
session_start();
$d = $_SESSION['admin'];

if( (!isset($_SESSION['admin'])OR (isset($_SESSION['admin']['access']) === '2'))){
 
echo"<script>location='login.php'</script>";

 
 }

?> 


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Neflo | Admin</title>
	<!-- BOOTSTRAP STYLES-->
 
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
      <link rel="stylesheet" href="assets/fontawesome-free/css/all.min.css">
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                     
                </button>
                <a class="navbar-brand" href="index.php">Neflo admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">   &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				    <li class="text-center">
                    <img src="assets/gambar/<?= $d['gambar'];?>" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a    href="index.php"><i class="fas fa-tachometer-alt fa-3x mb-4"></i> Home<br></a> 
                    </li>

                 

                     <li>
                        <a    href="index.php?halaman=pembelian"><i class="fas fa-credit-card fa-3x mb-4"></i></i> Pembelian</a>
                    </li>
                     <li>
                        <a    href="index.php?halaman=pelanggan"><i class="fab fa-intercom fa-3x mb-4"></i> Pelanggan</a>
                    </li>

                      <li>
                        <a    href="index.php?halaman=produk"  ><i class="fas fa-shopping-bag fa-3x mb-4"></i>Produk</a>
                    </li>
                     
                   
                </ul>
                <ul>
                    <li>   
                        <a    href="index.php?halaman=logout"><i class="fas fa-sign-out-alt fa-3x mt-4"></i>Logout</a>
                    </li>
               </ul>
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                
               <?php

                    if(isset($_GET['halaman'])){

                        if($_GET['halaman']== "produk")
                        {
                            include 'produk.php';
                        }elseif($_GET['halaman']=="pembelian")
                        {
                            include 'pembelian.php';
                        }
                        elseif($_GET['halaman']=="pelanggan")
                        {
                            include 'pelanggan.php';
                        }
                        elseif($_GET['halaman']=="logout")
                        {
                            include 'logout.php';
                        }
                        elseif($_GET['halaman'] =='detail')
                        {
                            include 'detail.php';
                        }
                        elseif($_GET['halaman'] =='tambahproduk')
                        {
                            include'tambahproduk.php';
                        }
                        elseif($_GET['halaman']=="hapus")
                        {
                            include'hapus.php';
                        }
                        elseif($_GET['halaman']=="ubah")
                        {
                            include'ubah.php';
                        }
                        elseif($_GET['halaman']=="pembayaran")
                        {
                            include'pembayaran.php';
                        }
                        elseif($_GET['halaman']=="bucket")
                        {
                            include'bucket.php';
                        }
                        elseif($_GET['halaman']=="bunga")
                        {
                            include'bunga.php';
                        }
                        elseif($_GET['halaman']=="pagar")
                        {
                            include'pagar.php';
                        }
                    }

                    else
                    {
                        include 'home.php';
                    }


                ?>
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
