<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="<?php echo _WEB ?>/public/assets/sneat/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title></title>

  <meta name="description" content="" />
  <link rel="icon" type="image/x-icon" href="<?php echo _WEB ?>/public/assets/sneat/img/favicon/favicon.ico" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo _WEB ?>/public/assets/sneat/vendor/fonts/boxicons.css" />
  <link rel="stylesheet" href="<?php echo _WEB ?>/public/assets/sneat/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="<?php echo _WEB ?>/public/assets/sneat/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="<?php echo _WEB ?>/public/assets/sneat/css/demo.css" />
  <link rel="stylesheet" href="<?php echo _WEB ?>/public/assets/sneat/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link href="https://cdn.datatables.net/v/bs5/dt-1.13.6/datatables.min.css" rel="stylesheet">
  <script src="<?php echo _WEB ?>/public/assets/sneat/vendor/js/helpers.js"></script>
  <script src="<?php echo _WEB ?>/public/assets/sneat/js/config.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.datatables.net/v/bs5/dt-1.13.6/datatables.min.js"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->

      <?php $this->renderView('blocks/header'); ?>
      <!-- Layout container -->
      <div class="layout-page">
        <nav class="d-xl-none layout-navbar navbar navbar-detached p-3 align-items-center p-1 ms-1 me-0 mt-1" style="width:fit-content !important;" id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center d-xl-none ">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>



        </nav>
        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Layout Demo -->

            <?php $this->renderView($content, $sub_content); ?>
            <!--/ Layout Demo -->
          </div>
          <?php $this->renderView('blocks/footer'); ?>
        </div>
        <!--/ Layout Demo -->
      </div>
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->

  <script src="<?php echo _WEB ?>/public/assets/sneat/vendor/libs/jquery/jquery.js"></script>
  <script src="<?php echo _WEB ?>/public/assets/sneat/vendor/libs/popper/popper.js"></script>
  <script src="<?php echo _WEB ?>/public/assets/sneat/vendor/js/bootstrap.js"></script>
  <script src="<?php echo _WEB ?>/public/assets/sneat/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="<?php echo _WEB ?>/public/assets/sneat/vendor/js/menu.js"></script>
  <script src="<?php echo _WEB ?>/public/assets/sneat/js/main.js"></script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>