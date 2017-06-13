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
<?php include('content/sidenav_left.php');?>
<!-- End Left Sidenav -->
     
<!-- Main Container -->
<div style = "background:transparent url('images/background.jpg') no-repeat center center /cover" 
     class = "col-sm-10 main_container">
    <!-- Show Slots  -->
    <?php if (isset($_POST['load'])) :?>
        <?php include('content/full_shows.php');?>   
            <?php else:?>
     <?php include('content/empty_shows.php');?>     
    <?php endif; ?>
    <!-- End Show Slots --> 
    
</div>    
<!-- End Main Container -->

</div>
</div>

<!-- Footer --> 
<?php include('content/footer.php'); ?>
<!-- End Footer -->

</body>
</html>
