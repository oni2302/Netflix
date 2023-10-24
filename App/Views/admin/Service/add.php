<form action="<?php echo _WEB . "/admin/service/addServicePackages" ?>" method="post">
    <div class="row">
        <div class="col-4">
            <div>
         <label class="form-label" for="Id">id:</label>
            <input class="form-control" type="" id="Id" name="Id" required>

            <label class="form-label" for="Name">Tên gói dịch vụ:</label>
            <input class="form-control" type="text" id="name" name="name" required>

            <label  class="form-label" for="remaining">Giá:</label>
            <input class="form-control" type="text" id="remaining" name="remaining" required>

            <label class="form-label" for="startDate">Ngày tạo:</label>
            <input class="form-control" type="date" id="startDate" name="startDate" required>

            <label  class="form-label" for="maxResolution">Độ phân giải tối đa:</label>
            <input class="form-control" type="text" id="maxResolution" name="maxResolution" required>

            <label  class="form-label" for="haveAds">Quảng cáo:</label>
            <input  class="form-control" type="radio" id="haveAds" name="haveAds" value="yes">yes <br>
            <input  class="form-control" type="radio" id="haveAds" name="haveAds" value="no">no <br>

            <label  class="form-label" for="haveHistory">Lịch sử xem:</label>
            <input  class="form-control" type="radio" id="haveHistory" name="haveHistory" value="yes">yes <br>
            <input  class="form-control" type="radio" id="haveHistory" name="haveHistory" value="no">no <br>
        </div>
    </div>

</form>