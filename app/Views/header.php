<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Inventory</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo base_url() ?>/assets/slack.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/assets/vendor/fonts/boxicons.css" />

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dataTables/css_dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dataTables/css_bootstrap.min.css">

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Helpers -->
    <script src="<?php echo base_url() ?>assets/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?php echo base_url() ?>assets/assets/js/config.js"></script>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?php echo base_url() ?>assets/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?php echo base_url() ?>assets/dataTables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/dataTables/dataTables.bootstrap5.min.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/vendor/libs/popper/popper.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/vendor/js/bootstrap.js"></script>
    <script src="<?php echo base_url() ?>assets/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    
    <style>
    #myTable tr:hover {
        cursor: pointer;
    }
    </style>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="<?php echo base_url('')?>" class="app-brand-link">
              <h3 class=" demo menu-text fw-bolder ms-2"><?php echo $app_title ?></h3>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item <?php if (isset($main_menu) && $main_menu == 'dashboard') echo 'active' | '' ?>">
              <a href="<?php echo site_url('dashboard') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-category"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <li class="menu-item <?php if (isset($main_menu) && $main_menu == 'categories') echo 'active' | '' ?>">
              <a href="<?php echo site_url('categories') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-category"></i>
                <div data-i18n="Analytics">Categories</div>
              </a>
            </li>

            <li class="menu-item <?php if (isset($main_menu) && $main_menu == 'supply') echo 'active' | '' ?>">
              <a href="<?php echo site_url('supply') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-category"></i>
                <div data-i18n="Analytics">Supply</div>
              </a>
            </li>

            <li class="menu-item">
                <div data-i18n="Analytics" class="menu-link fw-bold">Extra</div>
            </li> 

            <li class="menu-item <?php if (isset($main_menu) && $main_menu == 'users') echo 'active' | '' ?>">
              <a href="<?php echo site_url('users') ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bx-category"></i>
                <div data-i18n="Analytics">Users</div>
              </a>
            </li>

          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <!-- / Navbar -->

          <!-- Content wrapper -->
              <div class="row ">
                <div class="col-12 ">
                    <?php if ($message = session('message')) { ?>
                      <div class="container pt-2 mb-0"> 
                      <?php $messageType = session('message_type'); ?>
                        <div class="alert alert-dismissible alert-<?php echo $messageType ?> mb-0 text-dark" role="alert">
                            <?php echo $message ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                      </div>
                    <?php } ?>
                </div>
            </div>



          