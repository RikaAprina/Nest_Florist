
<!DOCTYPE html>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
    <link rel="stylesheet" href="admin/assets/fontawesome-free/css/all.min.css">
    <style >
      

      @media (min-width: 576px) { ... }
      .fas{
        color: blue;
      }
      
      .konten{
        background-color: pink;
        height: 500px;
      }
      .sticky {
        position: fixed;
        top: 0;
        width: 100%;
      }

      .sticky + .content {
        padding-top: 60px;
      }
    </style>

    
  </head>
  <body>
    <div class="logo" style="background-color: pink;">
       <a class="navbar-brand" href="#" style="position: absolute;margin-left: 10px;">Florist Nest</a>
    <div class="container  ">
     
      <div class="bg" style="background-image: url('admin/assets/img/poto/logo.jpg');background-size: 100% 100%;background-repeat:no-repeat;height: 200px; margin-left: 150px;
        margin-right: 150px;">
       
       
      </div>
    </div>

     
 </div>
      <nav id="navbar" class="navbar navbar-expand-lg navbar-light    " style="background-color: #E0FFFF;">
        <div class="container text-primary" style="background-color: #E0FFFF;  ">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto  ">
      
    	<a class="nav-item nav-link  "   href="index.php" title="home"><i class="fas fa-home"> HOME</i></a>
     <a class="nav-item nav-link  "  href="keranjang.php" title="keranjang"><i class="fas fa-shopping-cart"></i> Keranjang</a>
			<a class="nav-item nav-link" href="checkout.php" title="checkout"><i class="fas fa-shopping-basket"></i> Checkout</a>
			<a class="nav-item nav-link" href='riwayat.php' title="Riwayat"><i class="fas fa-history"></i> History</a>
				<?php if(isset($_SESSION["pelanggan"]) OR !empty($_SESSION["pelanggan"])):?>
			<a class="nav-item nav-link" href='logout.php' title="logout"><i class="fas fa-sign-out-alt"></i> Log out</a>
					 
			 
				<?php else :?>
			<a class="nav-item nav-link" href="login.php" title="Login"><i class="fas fa-sign-in-alt"></i> Log in</a>
			<a class="nav-item nav-link" href="daftar.php" title="daftar"><i class="fas fa-user-plus"></i> Daftar</a>
				<?php endif ?>

  <script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
 </div>
</div>
</div>
</nav>
 