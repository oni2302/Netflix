<?php
if (empty($manageInfor)) {
    $manageInfor = [];
}
?>
<div class="row">
    <form action="<?php echo _WEB . "/manageInfor/edit/" . $id ?>" method="post">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Thông tin cá nhân</h5>
                <small class="text-muted float-end">Netflix</small>
            </div>
            <?php foreach ($manageInfor as $key => $value) { ?>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label" for="username">Tên đăng nhập</label>
                        <div type="text" class="form-control" id="username" placeholder="" name="username"><?php echo $value['username']; ?> </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <div type="email" class="form-control" id="email" placeholder="" name="email"><?php echo $value['email']; ?> </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="fullname">Họ tên</label>
                        <div type="text" class="form-control" id="fullname" placeholder="" name="fullname"><?php echo $value['fullname']; ?> </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="birth">Ngày sinh</label>
                        <div type="date" class="form-control" id="birth" placeholder="" name="birth"><?php echo $value['birth']; ?> </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="address">Địa chỉ</label>
                        <div type="text" class="form-control" id="address" placeholder="" name="address"><?php echo $value['address']; ?> </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="currentService">Gói dịch vụ</label>
                        <div type="text" class="form-control" id="currentService" placeholder="" name="currentService"><?php echo $value['currentService']; ?> </div>
                    </div>
                    <!-- Additional fields can be added if needed -->
                    <a href="<?php echo _WEB ?>/manageInfor/viewEdit/<?php echo $value['id'] ?>" type="submit" class="btn btn-primary">Chỉnh sửa</a>
                </div>
            <?php } ?>
        </div>
    </form>
</div>