<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Cloud Platform</title>
  <!-- Iconic Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="vendors/iconic-fonts/flat-icons/flaticon.css">
  <link rel="stylesheet" href="vendors/iconic-fonts/cryptocoins/cryptocoins.css">
  <link rel="stylesheet" href="vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css">
  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
  <!-- Page Specific CSS (Slick Slider.css) -->
  <link href="assets/css/slick.css" rel="stylesheet">
  <!-- mednalytics styles -->
  <link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/fonticont.css" rel="stylesheet">
  <!-- Page Specific CSS (Morris Charts.css) -->
  <link href="assets/css/morris.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="imgs/logo-aa.png">
</head>

<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">
  <!-- Setting Panel -->
  <!--<div class="ms-toggler ms-settings-toggle ms-d-block-lg">-->
  <!--  <i class="flaticon-gear"></i>-->
  <!--</div>-->
  
  <!-- Preloader -->
  <div id="preloader-wrap">
    <div class="spinner spinner-8">
      <div class="ms-circle1 ms-child"></div>
      <div class="ms-circle2 ms-child"></div>
      <div class="ms-circle3 ms-child"></div>
      <div class="ms-circle4 ms-child"></div>
      <div class="ms-circle5 ms-child"></div>
      <div class="ms-circle6 ms-child"></div>
      <div class="ms-circle7 ms-child"></div>
      <div class="ms-circle8 ms-child"></div>
      <div class="ms-circle9 ms-child"></div>
      <div class="ms-circle10 ms-child"></div>
      <div class="ms-circle11 ms-child"></div>
      <div class="ms-circle12 ms-child"></div>
    </div>
  </div>
  <!-- Overlays -->
  <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
  <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>
  <!-- Sidebar Navigation Left -->
  <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
      <a class="pl-0 ml-0 text-center" href="index.php"> <img src="imgs/logo1.jpg" alt="logo"> </a>
     
      <h6 class="text-center text-white mb-3">Admin</h6>
    </div>
    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      <!-- Dashboard -->
      
      <!-- /Dashboard -->
       <li class="menu-item">
        <a href="index.php"  >
          <span><i class="fas fa-home"></i>Dashboard</span>
        </a>
       
      </li>
     
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#doctor" aria-expanded="false" aria-controls="doctor">
          <span><i class="fas fa-upload"></i>Upload</span>
        </a>
        <ul id="doctor" class="collapse" aria-labelledby="doctor" data-parent="#side-nav-accordion">
          <li> <a href="add-project.php">Add Files</a> </li>
        </ul>
      </li>
   
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#doctor" aria-expanded="false" aria-controls="doctor">
          <span><i class="fas fa-building"></i>View Files</span>
        </a>
      </li>
    
     
    
    </ul>
  </aside>
  <!-- Sidebar Right -->

  <!-- Main Content -->
  <main class="body-content">
    <!-- Navigation Bar -->
    <nav class="navbar ms-navbar">
      <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
        <span class="ms-toggler-bar bg-white"></span>
        <span class="ms-toggler-bar bg-white"></span>
        <span class="ms-toggler-bar bg-white"></span>
      </div>
      <div class="logo-sn logo-sm ms-d-block-sm">
        <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="index.php"><img src="imgs/logo01.png" alt="logo"> </a>
      </div>
      <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">

        <!--<li class="ms-nav-item  ms-d-none">-->
        <!--  <a href="#mymodal" class="text-white" data-toggle="modal"><i class="flaticon-spreadsheet mr-2"></i> Make an appointment</a>-->
        <!--</li>-->

        <!--<li class="ms-nav-item ms-d-none">-->
        <!--  <a href="#prescription" class="text-white" data-toggle="modal"><i class="flaticon-pencil mr-2"></i> Write a prescription</a>-->
        <!--</li>-->

        <!--<li class="ms-nav-item ms-d-none">-->
        <!--  <a href="#report1" class="text-white" data-toggle="modal"><i class="flaticon-list mr-2"></i> Generate Report</a>-->
        <!--</li>-->

       
       <form action="logout.php" method="POST">
                    <button class="btn btn-primary mt-4 d-inline w-20" type="submit" name="logobnt" value="submit" style="margin-top:8px !important; margin:8px auto"><i class="flaticon-shut-down mr-2"></i>Logout</button>
      </form>
      </ul>
      <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler"  data-target="#ms-nav-options">
        <form action="logout.php" method="POST">
                    <button class="btn btn-primary mt-4 d-inline w-20" type="submit" name="logobnt" value="submit" style="margin-top:0px !important; padding:5px; min-width:0px;"><i class="flaticon-shut-down mr-2"></i>Logout</button>
      </form>
      </div>
    </nav>