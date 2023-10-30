<form action="<?php echo _WEB . "/admin/supplier/EditSupplier".$id ?>" method="post">
    <div class="row">
        <div class="col-4">
            <div>
                <label class="form-label" for="name">Tên nhà cung cấp:</label>
                <input class="form-control" type="text" id="name" name="name" required>

                <label class="form-label" for="addDate">Ngày thêm:</label>
                <input class="form-control" type="date" id="addDate" name="addDate" required>

                <label class="form-label" for="totalPaying">Tổng thanh toán:</label>
                <input class="form-control" type="number" id="totalPaying" name="totalPaying" required> <br>
                <button class="btn btn-primary" type="submit"> Edit </button>
            </div>
        </div>
    </div>
</form>