<?php
if (empty($manageInfor)) {
    $manageInfor = [];
}
?>
<div class="row">
    <form action="<?php echo _WEB . "/manageInfor/edit"?>" method="post">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Chỉnh sửa thông tin cá nhân</h5>
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
                        <input type="email" class="form-control" id="email" value="<?php echo $value['email']; ?>" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="fullname">Họ tên</label>
                        <input type="text" class="form-control" id="fullname" value="<?php echo $value['fullname']; ?>" name="fullname" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="birth">Ngày sinh</label>
                        <input type="date" class="form-control" id="birth" value="<?php echo $value['birth']; ?>" name="birth" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="address">Địa chỉ</label>
                        <input type="text" class="form-control" id="address" value="<?php echo $value['address']; ?>" name="address" required> 
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="currentService">Gói dịch vụ</label>
                        <input type="number" class="form-control" id="currentService" value="<?php echo $value['currentService']; ?>" name="currentService" required>
                    </div>
                    <!-- Additional fields can be added if needed -->
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </div>
            <?php } ?>
            
        </div>
        
    </form>
</div>