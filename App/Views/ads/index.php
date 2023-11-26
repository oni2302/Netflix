<div class="row">
    <form action="<?php echo _WEB; ?>/Advertisement/editHandle" method="post">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Thông tin đối tác quảng cáo</h5>
                <small class="text-muted float-end">Netflix</small>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Cập nhật email để sử dụng chức năng" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="registerDate">Ngày đăng kí</label>
                    <input type="date" class="form-control" id="registerDate" disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="fullname">Tên đối tác</label>
                    <input type="text" class="form-control" id="fullname" placeholder="Cập nhật tên để sử dụng chức năng" name="fullname">
                </div>
                <!-- Additional fields can be added if needed -->
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </div>
        </div>
    </form>
</div>
