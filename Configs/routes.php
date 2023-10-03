<?php
    // Home
    $routes['default_controller'] = 'home';
    $routes['trang-chu'] = 'home/index';
    //Product
    $routes['danh-sach-san-pham'] = 'product/index';
    $routes['chi-tiet/(.+)'] = 'product/detail/$1';
    $routes['fetch/(.+)/size'] = 'product/size/$1';

    //Tùy chỉnh đường link
    //Ví dụ $routes['duong_link'] = 'controller/action' => http://localhost/duong_link thì nó sẽ vào controller và action
    //Ví dụ đường link có thêm biến $routes['duong_link/(.+)'] = 'controller/action/$1' Ví dụ nhập link http://localhost/duong_link/1 thì nó gọi controller và action(1)
