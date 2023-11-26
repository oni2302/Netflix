<?php
?>
<div class="row">

    <?php
    foreach ($service as $key => $value) { ?>
        <div class="col-xxl-3 col-sm-5 p-3">
            <div class="card">
                <a href="">
                    <img class="card-img-top" src="<?php echo _WEB ?>/public/assets/images/brand/netflix-banner.jpg" width="200px" alt="Card image cap">
                </a>

                <div class="card-body">
                    <h5 class="card-title"><?php echo $value['name'] . " / $" . $value['price'] ?> </h5>
                    <p class="card-text">
                        Các lợi ích của gói
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo $value['resolution'] ?></li>
                    <?php if (!$value['haveAds']) { ?>
                        <li class="list-group-item">Không quảng cáo</li>
                    <?php } ?>
                    <?php if ($value['haveHistory']) { ?>
                        <li class="list-group-item">Lịch sử xem phim</li>
                    <?php } ?>
                </ul>
                <div class="card-body">
                    <a class="card-link">Thời hạn <?php echo $value['duration'] ?> ngày</a>
                    <a href="javascript:void(0)" class="card-link">Đăng ký ngay</a>
                </div>
            </div>
        </div>
    <?php }
    ?>

</div>