<form action="<?php echo _WEB . "/admin/service/editService/".$id ?>" method="post">
    <div class="row">
        <div class="col-4">
            <div>
                <label class="form-label" for="name">Tên gói dịch vụ:</label>
                <input class="form-control" type="text" id="name" name="name" required>

                <div class="input-group input-group-merge my-3">
                    <span class="input-group-text">Giá dịch vụ</span>
                    <input type="number" class="form-control" placeholder="299000" aria-label="" name="price" required>
                    <span class="input-group-text">VND</span>
                </div>

                <label class="form-label" for="maxResolution">Độ phân giải tối đa:</label>
                <input class="form-control" type="text" id="maxResolution" name="maxResolution" required>

                <label class="form-label" for="haveAds">Quảng cáo:</label>
                <input class="form-control" type="text" id="haveAds" name="haveAds" required>

                <div class="form-check mt-3">
                    <input class="form-check-input" name="haveHistory" type="checkbox" value="1" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Lịch sử xem
                    </label>
                </div>
                <label class="form-label" for="duration">Thời hạn:</label>
                <input class="form-control" type="text" placeholder="Số ngày" id="duration" name="duration" required> <br>
                <button class="btn btn-primary" type="submit"> Sửa </button>
            </div>
        </div>
    </div>
</form>
