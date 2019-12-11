<?php include 'fun.php';?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
    <link rel="stylesheet" href="admin/assets/fontawesome-free/css/all.min.css">

</head>
<body>
    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                <br /><br />
                <h2>  Admin : Register</h2>
               
                <h5>( Register yourself to get access )</h5>
                 <br />
            </div>
        </div>
         <div class="row">
               
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>  New User ? Register Yourself </strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form" method="post" enctype="multipart/form-data">
<br/>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-circle-o-notch"  ></i></span>
                                            <input type="text" class="form-control" name="nama" placeholder="Your Full Name" required="" />
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" class="form-control" name="username" placeholder="Desired Username" required="" />
                                        </div>
                                    
                                      <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" name="password" placeholder="Enter Password" required="" />
                                        </div>
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" class="form-control" name="password2" placeholder="Retype Password"  required="" />
                                        </div>

                                        <div class="form-group input-group">
                                            <div class="image-upload">
                                              <span class="input-group-addon">Profile Picture</span>
                                            <label for="file-input">

                                                <img src="assets/logo/upload.jpg" class="rounded-circle" height="50px" style="margin-top:-19px;position: absolute;" width="80px" />
                                            </label>

                                            <input id="file-input" style="display: none;" name="gambar" type="file"/>
                                        </div>
                                  </div>
    </div>
                                        </div>
                                     
                                     <button class="btn btn-primary" name="register" type="submit">Register</button>
                                    <hr />
                                    Already Registered ?  <a href="login.php" >Login here</a>
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>



    <?php

    if(isset($_POST['register'])){
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $password2 = md5($_POST['password2']);

        $name = $_FILES['gambar']['name'];
        $size = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];                            
        $tmp = $_FILES['gambar']['tmp_name'];
        if($error === 4){
          echo"<script>alert('insert your picture');</script>";
          return false;
        }
  
  $isifile = ['jpg','jpeg','png'];
  $isi = explode('.' ,$name);
  $isi = strtolower(end($isi));
  
  if(!in_array($isi,$isifile)){
    echo"<script>alert('not a valid file');</script>";
    return false;
  }
  
  if($size > 1000000){
    echo"<script>alert('file is too big');</script>";
    return false;
  }
  $newname = uniqid();
  $newname .= '.';
  $newname .=$name;
   move_uploaded_file($tmp,'assets/gambar/'.$newname);

if($password != $password2){
    echo"<div class='alert alert-info'>Password Tak sama</div>";
    echo"<meta http-equiv='refresh' content='1;url=registeration.php'   >";
}else{

    $ambil = $conn->query("Select * from admin where username = '$username'");
     if( mysqli_num_rows($ambil) > 0 ){

        echo"<div class='alert alert-danger'>Username Sudah digunakan!</div>";
        echo"<meta http-equiv='refresh' content='1;url=registeration.php'   >";     }
        else{
               $input = $conn->query("INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`,`gambar`) VALUES (NULL, '$username', '$password', '$nama','$newname')");
                                                 echo"<div class='alert alert-info'>registeration Berhasil</div>";
                                                
                                                   }
        }
    
}



                                                              
        

        ?>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
