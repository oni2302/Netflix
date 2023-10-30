<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="<?php echo _WEB ?>/public/assets/sneat/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title><?php echo $title?></title>

    <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-5DDHKGP"></script>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5DDHKGP');
    </script>
    <link rel="icon" type="image/x-icon" href="<?php _WEB?>/public/assets/sneat/img/favicon/favicon.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">


    <link rel="stylesheet" href="<?php _WEB?>/public/assets/sneat/vendor/fonts/boxicons.css">


    <!-- Core CSS -->
    <link rel="stylesheet" href="<?php _WEB?>/public/assets/sneat/vendor/css/core.css" class="template-customizer-core-css">
    <link rel="stylesheet" href="<?php _WEB?>/public/assets/sneat/vendor/css/theme-default.css" class="template-customizer-theme-css">
    <link rel="stylesheet" href="<?php _WEB?>/public/assets/sneat/css/demo.css">

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?php _WEB?>/public/assets/sneat/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">


    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="<?php _WEB?>/public/assets/sneat/vendor/css/pages/page-auth.css">

    <!-- Helpers -->
    <script src="<?php _WEB?>/public/assets/sneat/vendor/js/helpers.js"></script>
    <style type="text/css">
        .layout-menu-fixed .layout-navbar-full .layout-menu,
        .layout-page {
            padding-top: 0px !important;
        }

        .content-wrapper {
            padding-bottom: 0px !important;
        }
    </style>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?php _WEB?>/public/assets/sneat/js/config.js"></script>

    <script type="text/javascript" src="https://a.omappapi.com/app/js/api.min.js" async="" data-user="252882" data-account="269977"></script>
    <link rel="stylesheet" href="https://a.omappapi.com/app/js/api.min.css" id="omapi-css" media="all">
    <script async="" src="https://script.hotjar.com/modules.132f983e088e46bc619e.js" charset="utf-8"></script>
    <style>
        #_hjSafeContext_55421493 {
            opacity: 1 !important;
            overflow: visible !important
        }
    </style>
</head>

<body>

    <div class="container-xxl">
        <!-- Layout Demo -->

        <?php $this->renderView($content, $sub_content); ?>
        <!--/ Layout Demo -->
    </div>

    <script src="<?php echo _WEB ?>/public/assets/sneat/vendor/libs/jquery/jquery.js"></script>
    <script src="<?php echo _WEB ?>/public/assets/sneat/vendor/libs/popper/popper.js"></script>
    <script src="<?php echo _WEB ?>/public/assets/sneat/vendor/js/bootstrap.js"></script>
    <script src="<?php echo _WEB ?>/public/assets/sneat/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="<?php echo _WEB ?>/public/assets/sneat/vendor/js/menu.js"></script>
    <script src="<?php echo _WEB ?>/public/assets/sneat/js/main.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>