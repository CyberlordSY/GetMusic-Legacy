<?php
include('../includes/config.php');
include('../includes/function.php');

if(!isset($_SESSION['IS_LOGIN'])){
  redirect('register.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Welcome to GetMusic</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/css/vendor.bundle.base.css">
  <link rel = "icon" href ="../assets/images/logo.png">
  <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
  <script src="https://kit.fontawesome.com/7dc2b1cc7e.js" crossorigin="anonymous"></script>
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="assets/css/style.css">
  <style type="text/css">
    table{
        text-align: center;
    }
  </style>
</head>
<body class="sidebar-light">
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-menu-wrapper d-flex align-items-stretch justify-content-between">
        <ul class="navbar-nav mr-lg-2 d-none d-lg-flex">
          <li class="nav-item nav-toggler-item">
            <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
          </li>
          
        </ul>
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.php"><h2 class="text-success">GetMusic</h2></a>
          <a class="navbar-brand brand-logo-mini" href="index.php"><h2 class="text-success">GetMusic</h2></a>
        </div>
        <ul class="navbar-nav navbar-nav-right">
          
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <span class="nav-profile-name"><?php echo $_SESSION['ADMIN_USER']?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="logout.php">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
               <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="edit.php">
                <i class="mdi mdi-tooltip-edit text-primary"></i>
                Edit
              </a>
            </div>
          </li>
          
          <li class="nav-item nav-toggler-item-right d-lg-none">
            <button class="navbar-toggler align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-menu"></span>
            </button>
          </li>
        </ul>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="main.php">
              <i class="mdi mdi-view-quilt menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>   
          <li class="nav-item">
            <a class="nav-link" href="user.php">
              <i class="fas fa-user menu-icon"></i>
              <span class="menu-title">Users</span>
            </a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="genres.php">
              <i class="fas fa-water menu-icon"></i>
              <span class="menu-title">Genres</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="artists.php">
              <i class="fas fa-microphone-alt menu-icon"></i>
              <span class="menu-title">Artists</span>
            </a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="albums.php">
              <i class="far fa-images menu-icon"></i>
              <span class="menu-title">Albums</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="songs.php">
              <i class="fas fa-music menu-icon"></i>
              <span class="menu-title">Songs</span>
            </a>
          </li> 
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">