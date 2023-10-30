<form action="<?php echo _WEB . "/admin/supplier/addSupplier" ?>" method="post">
    <div class="row">
        <div class="col-4">
            <div>
         <label class="form-label" for="id">id:</label>
            <input class="form-control" type="id" id="id" name="id" required>

            <label class="form-label" for="name">Tên nhà cung cấp:</label>
            <input class="form-control" type="text" id="name" name="name" required>

            <label  class="form-label" for="addDate">Ngày thêm:</label>
            <input class="form-control" type="date" id="addDate" name="addDate" required>

            <label class="form-label" for="totalPaying">Tổng thanh toán:</label>
            <input class="form-control" type="totalPaying" id="totalPaying" name="totalPaying" required> <br>
            <button type="submit" > add </button>
        </div>
    </div>

</form>