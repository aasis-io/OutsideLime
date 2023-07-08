<?php
@session_start();
if ((!array_key_exists('username', $_SESSION) && array_key_exists('username', $_COOKIE)) || empty($_COOKIE) || empty($_SESSION)) {
  header('location:../index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Admin | Shikhar Adventure</title>
  <meta name="robots" content="noindex, nofollow" />
  <meta content="" name="description" />
  <meta content="" name="keywords" />
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
  <link rel="manifest" href="site.webmanifest">
  <link href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/css/boxicons.min.css" rel="stylesheet" />
  <link href="assets/css/quill.snow.css" rel="stylesheet" />
  <link href="assets/css/quill.bubble.css" rel="stylesheet" />
  <link href="assets/css/remixicon.css" rel="stylesheet" />
  <link href="assets/css/simple-datatables.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboard.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="" />
        <span class="d-none d-lg-block">Admin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>
    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword" />
        <button type="submit" title="Search">
          <i class="bi bi-search"></i>
        </button>
      </form>
    </div>
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle" href="#">
            <i class="bi bi-search"></i>
          </a>
        </li>

        <li class="nav-item pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="logout.php">
            <i class="fa-solid fa-arrow-right-from-bracket"></i>
            <span class="d-none d-md-block ps-2">Logout</span>
          </a>
        </li>
      </ul>
    </nav>
  </header>