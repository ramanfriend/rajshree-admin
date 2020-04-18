<?php 

$id = $_GET['id'];
$bid = $_GET['bid'];
$movieBucket = "";
$imageBucket = "";
if ($bid == 1 || $bid == "1") {
    $movieBucket = "https://objectstorage.ap-mumbai-1.oraclecloud.com/n/bmqlzt2cz5mu/b/myvideo/o/";
    $imageBucket = "https://objectstorage.ap-mumbai-1.oraclecloud.com/n/bmqlzt2cz5mu/b/moviepic/o/";
} else if($bid == 2 || $bid == "2") {
    $movieBucket = "https://objectstorage.ap-mumbai-1.oraclecloud.com/n/bmocr3ypspzl/b/myvideo/o/"; //ramanmarch90
    $imageBucket = "https://objectstorage.ap-mumbai-1.oraclecloud.com/n/bmocr3ypspzl/b/moviepic/o/"; //ramanmarch90
} 
?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="My Tube">
      <meta name="author" content="RK Tech">
      <title>VIDOE - Video Streaming Website HTML Template</title>
      <!-- Favicon Icon -->
      <link rel="icon" type="image/png" href="img/favicon.png">
      <!-- Bootstrap core CSS-->
      <link href="js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom fonts for this template-->
      <link href="js/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <!-- Custom styles for this template-->
      <link href="css/osahan.css" rel="stylesheet">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="js/owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="js/owl-carousel/owl.theme.css">
   </head>
   <body id="page-top">
      <nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top">
         &nbsp;&nbsp; 
         <button class="btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle">
         <i class="fas fa-bars"></i>
         </button> &nbsp;&nbsp;
         <a class="navbar-brand mr-1" href="/"><img class="img-fluid" alt="" src="img/logo.png"></a>
         <!-- Navbar Search -->
         <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0 osahan-navbar-search">
            <div class="input-group">
               <input type="text" class="form-control" placeholder="Search for...">
               <div class="input-group-append">
                  <button class="btn btn-light" type="button">
                  <i class="fas fa-search"></i> 
                  </button>
               </div>
            </div>
         </form>
         <!-- Navbar -->
         <ul class="navbar-nav ml-auto ml-md-0 osahan-right-navbar">
            
            <li class="nav-item dropdown no-arrow osahan-right-navbar-user">
               <a class="nav-link dropdown-toggle user-dropdown-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <img alt="Avatar" src="img/user.png">
               Osahan 
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="account.html"><i class="fas fa-fw fa-user-circle"></i> &nbsp; My Account</a>
                  <a class="dropdown-item" href="subscriptions.html"><i class="fas fa-fw fa-video"></i> &nbsp; Subscriptions</a>
                  <a class="dropdown-item" href="settings.html"><i class="fas fa-fw fa-cog"></i> &nbsp; Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-fw fa-sign-out-alt"></i> &nbsp; Logout</a>
               </div>
            </li>
         </ul>
      </nav>
      <div id="wrapper">
         
         <div id="content-wrapper">
            <div style="padding: 10px;">
               <div class="video-block section-padding">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="single-video-left">
                           <div class="single-video">
                               <video poster="<?=$imageBucket;?><?=$id;?>" width="100%" height="415" controls>
                                 <source src='<?=$movieBucket;?><?=$id;?>'   type="video/mp4" />
                               Your browser does not support the video tag.
                               <track label="English" kind="subtitles" srclang="en" src="captions/vtt/godzilla.vtt">
                               </video>
                           </div>
                           <div class="single-video-title box mb-3">
                              <h2><a href="#"><?=$id;?></a></h2>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /.container-fluid -->
         </div>
         <!-- /.content-wrapper -->
      </div>
      <!-- /#wrapper -->
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
      </a>
      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
               <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="login.html">Logout</a>
               </div>
            </div>
         </div>
      </div>
      <!-- Bootstrap core JavaScript-->
      <script src="js/jquery/jquery.min.js"></script>
      <script src="js/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="js/jquery-easing/jquery.easing.min.js"></script>
      <!-- Owl Carousel -->
      <script src="js/owl-carousel/owl.carousel.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="js/custom.js"></script>
   </body>
</html>
