<form action="<?php echo _WEB . "/admin/voucher/xuliaddVoucher" ?>" method="post">
    <div class="row">
        <div class="col-4">
            <div>
         <label class="form-label" for="name">Tên phiếu:</label>
            <input class="form-control" type="text" id="name" placeholder="Giảm giá năm 2023" name="name" required>
            <label class="form-label" for="code">Mã giảm giá:</label>
            <input class="form-control" type="text" id="code"placeholder="GIAMGIA2023" name="code" required>
            <label class="form-label" for="discount">Giảm giá:</label>
            <input class="form-control" type="text" id="discount" name="discount" required>

            <label  class="form-label" for="remaining">Số lượng còn lại:</label>
            <input class="form-control" type="text" id="remaining" name="remaining" required>

            <label class="form-label" for="startDate">Ngày bắt đầu:</label>
            <input class="form-control" type="date" id="startDate" name="startDate" required>

            <label  class="form-label" for="endDate">Ngày kết thúc:</label>
            <input class="form-control" type="date" id="endDate" name="endDate" required>

            <label  class="form-label" for="specificFor">Dành cho:</label>
            <select  class="form-control" type="text" id="specificFor" name="specificFor" >
                <option value="null" selected>Tất cả</option>
                <?php foreach ($service as $key => $value) {
                    ?>
                    
                    <option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
                    <?php
                } ?>
            </select>

            <label  class="form-label" for="createDate">Ngày tạo:</label>
            <input class="form-control" type="date" id="createDate" name="createDate" required><br></br>

            <input  class="form-label btn btn-primary"  type="submit" value="Thêm phiếu giảm giá">
        </div>
    </div>

</form>