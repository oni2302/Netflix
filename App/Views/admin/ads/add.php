<form action="<?php echo _WEB . "/admin/Ads/xuliaddAds" ?>" method="POST">
    <div class="row">
        <div class="col-4">
            <label class="form-label" for="adsFrom">Đối Tác</label>
            <input class="form-control" type="text" id="adsFrom" name="adsFrom" required>

            <label class="form-label" for="adsLink">Đường Dẫn Quảng Cáo</label>
            <input class="form-control" type="adsLink" id="adsLink" name="adsLink" required>

            <label class="form-label" for="watchedTimes">Thời Lượng</label>
            <input class="form-control" id="watchedTimes" name="watchedTimes" required>

            <label class="form-label" for="addDate">Ngày bắt đầu:</label>
            <input class="form-control" type="date" id="addDate" name="addDate" required>
            <br></br>
            <input class="form-label btn btn-primary" type="submit" value="Thêm Quảng Cáo">
        </div>
    </div>
</form>