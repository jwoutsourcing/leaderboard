<!DOCTYPE html>
<html lang = "en">
    
<head>
    
<title> Programme Leaderboard </title>
  
<?php include('content/head.php');?>
 
</head>

<body>
     
<!-- Top NavBar -->
<?php include('content/topnav.php');?>
<!-- End Top NavBar -->
    
<div class = "container-fluid text-center">    
<div class = "row content">
   

<!-- Left Sidenav-->
 <?php include('content/sidenav_left2.php');?>
<!-- End Left Sidenav -->
  
      
<!-- Main Container -->
<div style = "background:transparent url('images/background.jpg') no-repeat center center /cover" 
     class = "col-sm-10 main_container">
<?php include('content/rated_shows.php');?>        
</div>    
<!-- End Main Container --> 

</div>
</div>

<!-- Footer --> 
<?php include('content/footer.php'); ?>
<!-- End Footer -->

</body>
</html>
