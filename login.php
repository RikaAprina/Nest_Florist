<?php 
session_start();
include 'admin/fun.php';

include'head.php';
?>


<div class="container   "style="background-color: pink;height: 400px;margin-top: -40px;">
  <div class="login  " style="margin-left: 420px;margin-top: 40px; ">
  <div class="row ">
    <div class="col-xm-6 mt-5">
  <h3 class="text-primary">Login Pelanggan</h3>

<form method="post">
  <div class="form-group">
    <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="far fa-envelope"></i></div>
        </div>
        <input type="text" class="form-control" name="email" id="inlineFormInputGroup" placeholder="Enter Email">
      </div>

        
     
  </div>
   <div class="form-group">
    <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-key"></i></div>
        </div>
        <input type="password" class="form-control" name="password" id="inlineFormInputGroup" placeholder="Enter Password">
      </div> 
  </div>
   
  
  <button type="submit" name="login" class="btn btn-primary">Log in</button>
</form>
 

 

  						  <?php if(isset($_POST["login"])){

                                       $email = $_POST['email'];
                                       $pass1 = $_POST['password'];
                                       $query =  mysqli_query($conn, "SELECT *FROM pelanggan WHERE email_pelanggan = '$email'");

   
 
                                         if( mysqli_num_rows($query) === 1)
                                                           {
                                                  $row=$query->fetch_assoc();

                                                 $_SESSION['pelanggan']  = $row;

                                                 if(isset($_SESSION['keranjang']) OR !empty($_SESSION['keranjang'])){
                                                 	echo "<script>location='checkout.php';<script>";
                                                 }
                                                 else{
                                                 	echo "<script>location='riwayat.php';<script>";
                                                 }
                                                 echo"<script>alert('login Berhasil');</script>";
                                                 echo"<meta http-equiv='refresh' content='1;url=index.php'   >";
                                                   }

    
                                                else{
                                                    echo"<script>alert('login gagal');</script>";
                                            echo"<meta http-equiv='refresh' content='1;url=index.php'   >";} 
  

                                                              }?>
    </div>
  </div>
</div>

 

 