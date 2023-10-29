<form action="<?php echo _WEB . "/admin/voucher/xuliaddVoucher" ?>" method="post">
    <div class="row">
        <div class="col-4">
            <div>
         <label class="form-label" for="name">Tên phiếu:</label>
            <input class="form-control" type="text" id="name" name="name" required>

            <label class="form-label" for="discount">Giảm giá:</label>
            <input class="form-control" type="text" id="discount" name="discount" required>

            <label  class="form-label" for="remaining">Số lượng còn lại:</label>
            <input class="form-control" type="text" id="remaining" name="remaining" required>

            <label class="form-label" for="startDate">Ngày bắt đầu:</label>
            <input class="form-control" type="date" id="startDate" name="startDate" required>

            <label  class="form-label" for="endDate">Ngày kết thúc:</label>
            <input class="form-control" type="date" id="endDate" name="endDate" required>

            <label  class="form-label" for="specificFor">Dành cho:</label>
            <input  class="form-control" type="text" id="specificFor" name="specificFor" required>

            <label  class="form-label" for="createDate">Ngày tạo:</label>
            <input class="form-control" type="date" id="createDate" name="createDate" required><br></br>

            <input  class="form-label"  type="submit" value="Thêm phiếu giảm giá">
        </div>
    </div>

</form>