<div class="row">
    <form action="<?php echo _WEB; ?>/ads/Advertisement/upHandle" method="post">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Đăng tải quảng cáo</h5>
                <small class="text-muted float-end">Netflix</small>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label" for="adsLink">Đường dẫn quảng cáo</label>
                    <input type="text" class="form-control" id="adsLink" placeholder="Đường dẫn tới video quảng cáo" name="adsLink">
                </div>
                <!-- Additional fields can be added if needed -->
                <button type="submit" class="btn btn-primary">Đăng tải</button>
            </div>
        </div>
    </form>
</div>