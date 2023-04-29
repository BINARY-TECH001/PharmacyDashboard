<?php require '../includes/session.php' ?>

<?php 
$conn =new mysqli('localhost','root','','pharmacy');

    $selectUser = mysqli_query($conn,"SELECT * FROM user WHERE username='{$_SESSION['username']}'");
    $Session_row = mysqli_fetch_array($selectUser);
?>



<!DOCTYPE html>


<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title> Pharmacy | Dashboard </title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />


    <!-- Page CSS -->
    <link rel="stylesheet" href="../assets/css/styles.css">

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="../pages/dashboard.php" class="app-brand-link">
                <!-- COMPANY LOGO -->
              <span class="app-brand-text demo menu-text fw-bolder"> AL MISKEEN</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
              <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- Components -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text"> Products </span></li>
            <!-- Cards -->
            <li class="menu-item">
              <a href="addNewProduct.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-list-plus"></i>
                <div data-i18n="Basic"> Add New Products </div>
              </a>
            </li>

            <!-- User interface -->
            <li class="menu-item">
              <a href="../pages/allProductts.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="Basic"> Manage Products </div>
              </a>
            </li>


                  <!-- Order -->
                  <li class="menu-header small text-uppercase"><span class="menu-header-text"> Order </span></li>
            <li class="menu-item">
              <a
                href="../pages/allProductts.php"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-package"></i>
                <div data-i18n="Support"> New Orders </div>
              </a>
            </li>
            <li class="menu-item">
              <a
                href="../pages/manageOrder.php"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Documentation"> Manage Orders </div>
              </a>
            </li>

            <!-- Settings -->
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text"> Settings </span>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Account Settings">Account Settings</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="accountSettings.php" class="menu-link">
                    <div data-i18n="Account">Account</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="../pages/accountNotifications.php" class="menu-link">
                    <div data-i18n="Notifications">Notifications</div>
                  </a>
                </li>
              </ul>
              

            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user-circle"></i>
                <div data-i18n="Account Settings"> Users </div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="addUser.php" class="menu-link">
                    <div data-i18n="Account"> Add New User </div>
                  </a>
                </li>

                <li class="menu-item">
                  <a href="../pages/manageUser.php" class="menu-link">
                    <div data-i18n="Notifications"> Manage All User </div>
                  </a>
                </li>
              </ul>
            </li>


            <!-- Misc -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text"> Help Center </span></li>
            <li class="menu-item">
              <a
                href="#"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Support">Support</div>
              </a>
            </li>
            <li class="menu-item">
              <a
                href="#"
                class="menu-link"
              >
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Documentation">Documentation</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->