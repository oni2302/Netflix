<form action="<?php echo _WEB . "/admin/service/addService" ?>" method="post">
    <div class="row">
        <div class="col-4">
            <div>
         <label class="form-label" for="id">id:</label>
            <input class="form-control" type="id" id="id" name="id" required>

            <label class="form-label" for="name">Tên gói dịch vụ:</label>
            <input class="form-control" type="text" id="name" name="name" required>

            <label  class="form-label" for="price">Giá:</label>
            <input class="form-control" type="text" id="price" name="price" required>

            <label class="form-label" for="createDate">Ngày tạo:</label>
            <input class="form-control" type="date" id="createDate" name="createDate" required>

            <label  class="form-label" for="maxResolution">Độ phân giải tối đa:</label>
            <input class="form-control" type="text" id="maxResolution" name="maxResolution" required>

            <label  class="form-label" for="haveAds">Quảng cáo:</label>
            <input class="form-control" type="text" id="haveAds" name="haveAds" required>

            <label  class="form-label" for="haveHistory">Lịch sử xem:</label>
            <input class="form-control" type="text" id="haveHistory" name="haveHistory" required>
            <label  class="form-label" for="duration">Thời hạn:</label> <br>
            <input class="form-control" type="text" id="duration" name="duration" required> <br>
            <button class="btn btn-primary" type="submit" > Thêm dịch vụ </button>
        </div>
    </div>

</form>