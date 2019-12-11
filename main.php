<?php
session_start();
include 'admin/fun.php';

 

 

 
?>

 <?php include 'head.php';?>


<html>
<head>
<style>
body {
	background-color: pink;
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
 font-family: Comic Sans MS, cursive, sans-serif;
  position: absolute;
  height: 100%;
  overflow: auto;
  color: white;
  text-shadow: 2px 2px blue;
    
}
.bip{
	width: 500px;
	margin-left: 0px;
	 
	border-radius: 25px;
}

 
 
.sidebar a.active {
   

}

.sidebar a:hover:not(.active) {
 
  
}

.content{
	display: inline-block;  
	border: 2px solid rgba(0, 0, 0, 0.3);
	border-radius: 25px;
	width: 200px;
	 
 
	 
}
.card{
	display:  inline-block;
	 
}
.content h4{
	position: absolute;
	color: black;
	opacity: 0.5;
	margin-top: 15px;
	 
}
.content h4,p{
	width: 50px;
}
 
 
  
.content img{
 	width: 168px;
 	height: 140px;
 	 border-radius: 5px 5px 5px 5px;
 }

  .content .btn{
 	display: inline-block;
 }
 .btn{
 	font-size: 8px;
 	width: 
 }
 .Price{
 	font-size: 12px;
 	width: 100px;
 	margin-left: 10px;
 	margin-bottom: 5px;
 }
 

 
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;

  }
  .sidebar a { 
  	text-align: center;}

  
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
 

  
}
@media (min-width: 576px) { 
	 .content img{
 	width: 168px;
 	height: 150px;
 }

 .content{
	display: inline-block;
	border: 2px solid rgba(0, 0, 0, 0.3);
	border-radius: 25px;
	 width: 200px;
 
	 
}
.content h4{
	position: absolute;
	color: black;
	opacity: 0.5;
	margin-top: 15px;
	 
}
.content h4,p{
	width: 200px;
}
.bip{
	width: 1000px;
	margin-left: 220px;
	 
	border-radius: 25px;


}
.isi{
	background-color: #A52A2A;
	height: 1500px;
}
.as{
	display: inline-block;
	margin-left: 50px;
	font-size: 10px;

}
 .t1{
 	text-shadow: none;
 	color: blue;
 }


 }
</style>
</head>
<body>

	<div class="isi">
	<div class="container mb-4">

<?php include'sidebar.php';?>

						   <?php

                    if(isset($_GET['halaman'])){

                        if($_GET['halaman']== "bucket")
                        {
                            include 'bucket.php';
                   		 }
                   		 elseif ($_GET['halaman'] =="potBunga") {
                   		 	include 'potBunga.php';
                   		 }
                   		 elseif ($_GET['halaman'] =="papan") {
                   		 	include 'papan.php';
                   		 }
                   		 elseif ($_GET['halaman'] =="detail") {
                   		 	include 'detail.php';
                   		 }
                   		  
                   	}

	                 else
	                    {
	                        include 'home.php';
	                    }
	                
                 ?>
 
</div>
</div>
			
				 		
				 
				 
	
	 	 	 
		 
			 
 
 


















 




<?php include'foot.php'?>