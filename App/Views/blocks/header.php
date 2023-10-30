<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo justify-content-center">
        <a href="index.html" class="app-brand-link">
        <span class="app-brand-logo demo ">
                <img width="150" src="<?php echo _WEB ?>/public/assets/images/brand/netflix.png" alt="" srcset="" style="object-fit: cover;">
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2"></span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item">
            <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Bảng điều khiển</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Thêm xóa sửa</span>
        </li>
        <!-- Layouts -->
        <li class="menu-item active open">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Quản lí</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="<?php echo _WEB ?>/admin/video/index" class="menu-link">
                        <div data-i18n="Without menu">Phim</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?php echo _WEB ?>/admin/service/index" class="menu-link">
                        <div data-i18n="Without navbar">Dịch vụ</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?php echo _WEB ?>/admin/voucher/hienthiview" class="menu-link">
                        <div data-i18n="Container">Ưu đãi</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?php echo _WEB ?>/admin/video/index" class="menu-link">
                        <div data-i18n="Fluid">Quảng cáo</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?php echo _WEB ?>/admin/video/index" class="menu-link">
                        <div data-i18n="Blank">Nhà cung cấp</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?php echo _WEB ?>/Customer/hienthiview" class="menu-link">
                        <div data-i18n="Blank">Khách Hàng</div>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</aside>
<!-- / Menu -->